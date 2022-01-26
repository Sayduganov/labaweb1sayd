<? session_start(); include("check_log.php");?>
<html>
<head>
<title> Редактирование данных о недвижимости </title>
</head>
<meta charset="utf-8">
<body>
<?php
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
$rows=mysqli_query($conn, "SELECT * FROM property WHERE id='".$_GET['id']."'");
 while ($st=mysqli_fetch_array($rows)) {
 $id = $st['id'];
 $address = iconv("cp1251", "utf-8", $st['address']);
 $type = iconv("cp1251", "utf-8", $st['type']);
 $area = $st['area'];
 $rooms = $st['rooms'];
 $cost = $st['cost'];
 }
print "<form action='save_edit.php' method='get'>";
print "Адрес: <input name='address' size='50' type='text'
value='".$address."'>";
print "<br>Тип дома: <input name='type' size='20' type='text'
value='".$type."'>";
print "<br>Метраж (кв. м.): <input name='area' size='20' type='number'
value='".$area."'>";
print "<br>Количество комнат: <input name='rooms' size='20' type='number'
value='".$rooms."'>";
print "<br>Стоимость: <input name='cost' size='20' type='number'
value='".$cost."'>";
print "<input type='hidden' name='id' 
value='".$id."'>";
print "<br><input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"index.php\"> Вернуться к списку недвижимости </a>";
?>
</body>
</html>