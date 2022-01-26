<? session_start(); 
include("check_log.php");
include("check_admin.php");
?>
<html>
<head>
<title> Редактирование данных о пользователе </title>
</head>
<meta charset="utf-8">
<body>
<form action="<? print $PHP_SELF ?>" method='get'>
<?php
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
$rows=mysqli_query($conn, "SELECT * FROM users");
 print "Пользователь: ";
 print '<select name="id_user">';
 print '<option>...</option>';

 while ($st=mysqli_fetch_array($rows)) {
 $id = $st['id'];
 $username = iconv("cp1251", "utf-8", $st['username']);
 $password = iconv("cp1251", "utf-8", $st['password']);
 $type = $st['type'];
echo  '<option value='.$st['id'].'>'.iconv("cp1251", "utf-8", $st['username']).' - ';
if (iconv("cp1251", "utf-8", $st['type']) == 1) { echo 'Оператор</option>'; }
elseif (iconv("cp1251", "utf-8", $st['type']) == 2) { echo 'Администратор</option>'; }
}
echo '</select>';
echo "<br>Имя пользователя: <input name='username' size='20' type='text'>";
echo "<br>Пароль: <input name='password' size='20' maxlength='32' type='text'>";
?>

<br>Тип: <select name='type'>
<option value='2'>Администратор</option>
<option value='1'>Оператор</option>
</select>
<br><input type='submit' name='edit' value='Сохранить'>
</form>
<p><a href="index.php"> Вернуться на главную </a>

<?
if (isset($_GET['edit'])) {
 $sql_add = "UPDATE users SET username='".iconv("utf-8", "cp1251", $_GET['username']).
"', password='".md5($_GET['password'])."', type='".$_GET['type']."' WHERE id='".$_GET['id_user']."'";
 mysqli_query($conn, $sql_add);
 if (mysqli_affected_rows($conn)>0) 
 { print "<p> Информация внесена в базу данных."; }
 else { print "<br> Ошибка сохранения."; }
}
?>
</body>
</html>