<? session_start(); 
include("check_log.php");
?>
<html>
<head>
<title> Редактирование данных </title>
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
$rows=mysqli_query($conn, "SELECT * FROM users WHERE id='".$_SESSION['userid']."'");
while ($st=mysqli_fetch_array($rows)) {
 $id = $st['id'];
 $username = iconv("cp1251", "utf-8", $st['username']);
 $password = iconv("cp1251", "utf-8", $st['password']);
}
echo "<br>Имя пользователя: <input name='username' size='20' value='".$username."' type='text'>";
echo "<br>Пароль: <input name='password' size='32' maxlength='32' type='text'>";
?>


<br><input type='submit' name='edit' value='Сохранить'>
</form>
<p><a href="index.php"> Вернуться на главную </a>

<?
if (isset($_GET['edit'])) {
 $sql_add = "UPDATE users SET username='".iconv("utf-8", "cp1251", $_GET['username'])."', password='".md5($_GET['password'])."' WHERE id='".$_SESSION['userid']."'";
 mysqli_query($conn, $sql_add);
 if (mysqli_affected_rows($conn)>0) 
 { print "<p> Информация внесена в базу данных."; }
 else { print "<br> Ошибка сохранения."; }
}
?>
</body>
</html>