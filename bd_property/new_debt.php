<? session_start(); include("check_log.php");?>
<html>
<head> <title> Добавление новой программы депозитов </title> </head>
<body>
<?php

 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
$result=mysqli_query($conn,"SELECT * FROM housemates LEFT JOIN property ON (housemates.id_house = property.id)");
?>
<H2>Введите данные:</H2>
<form action="save_new_debt.php" method="get">
 ID жильца: 
 <?php
echo '<select name="d">
<option>...</option>';
 while($row = mysqli_fetch_array($result)) {
echo  '<option value='.$row['id_mate'].'>'.iconv("cp1251", "utf-8", $row['fullname']).' - '.iconv("cp1251", "utf-8", $row['address']).'</option>';
}
echo '</select>'; 
?>
<br>Долг: <input name="debt" type="text">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку </a>
</body>
</html>