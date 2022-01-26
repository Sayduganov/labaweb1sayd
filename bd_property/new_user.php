<? session_start(); 
include("check_log.php");
include("check_admin.php");
?>

<head> <title> Добавление нового пользователя </title> </head>
<body>
<H2>Введите данные:</H2>
<form action="<? print $PHP_SELF ?>" method="get">
 Логин: <input name="username" size="20" type="text">
<br>Пароль: <input name="password" size="20" type="text">
<br>Тип:
<select name="type">
<option value='2'>Администратор</option>
<option value='1'>Оператор</option>
</select>
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться на главную </a>
</body>

<? 
if (isset($_GET['add'])) {
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
 $sql_add = "INSERT INTO users SET username='".iconv("utf-8", "cp1251", $_GET['username'])."', password='".md5($_GET['password'])."',  type='".iconv("utf-8", "cp1251", $_GET['type'])."'";
 mysqli_query($conn, $sql_add); // Выполнение запроса
 if (mysqli_affected_rows($conn)>0) // если нет ошибок при выполнении запроса
 { print "<p> Информация внесена в базу данных."; }
 else { print "<br> Ошибка сохранения."; }
}

?>