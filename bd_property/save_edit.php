<? session_start(); include("check_log.php");?>
<html> <body>
<?php
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
 $zapros="UPDATE property SET address='".iconv("utf-8", "cp1251", $_GET['address']).
"', type='".iconv("utf-8", "cp1251", $_GET['type'])."', area='".$_GET['area']."', rooms='".$_GET['rooms']."', cost='".$_GET['cost']."' WHERE id='".$_GET['id']."'";
 mysqli_query($conn, $zapros);
 if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено . <a href="index.php"> Вернуться к списку
недвижимости </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку недвижимости </a> '; }
?>
</body> </html>
