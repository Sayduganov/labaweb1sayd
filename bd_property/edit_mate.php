<? session_start(); include("check_log.php");?>
<html>
<head>
<title> Редактирование данных о жильце </title>
</head>
<meta charset="utf-8">
<body>
<?php
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
$rows=mysqli_query($conn, "SELECT * FROM housemates WHERE id_mate='".$_GET['id']."' ");
 while ($st=mysqli_fetch_array($rows)) {
 $id = $st['id_mate'];
 $fullname = iconv("cp1251", "utf-8", $st['fullname']);
 $birthdate = iconv("cp1251", "utf-8", $st['birthdate']);
 $id_house = iconv("cp1251", "utf-8", $st['id_house']);
 }
print "<form action='save_edit_mate.php' method='get'>";
print "ФИО: <input name='fullname' size='20' type='text'
value='".$fullname."'>";
print "<br>Год рождения: <input name='birthdate' size='20' type='number'
value='".$birthdate."'>";
print "<br>ID дома:";
echo '<select name="z">
<option>...</option>';
$result=mysqli_query($conn,"SELECT * FROM property");
 while($row = mysqli_fetch_array($result)) {
echo  '<option value='.iconv("cp1251", "utf-8", $row['id']).'>'.iconv("cp1251", "utf-8", $row['id']).' - '.iconv("cp1251", "utf-8", $row['address']).'</option>';
}
echo '</select>';
print "<input type='hidden' name='id' 
value='".$id."'>";
print "<br><input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку недвижимости </a>";
?>
</body>
</html>