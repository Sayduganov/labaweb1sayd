<? session_start(); include("check_log.php");?>
<html>
<head> <title> Добавление нового дома </title> </head>
<body>
<H2>Введите данные:</H2>
<form action="save_new.php" method="get">
 Адрес: <input name="address" size="20" type="text">
<br>Тип дома: <input name="type" size="20" type="text">
<br>Метраж (кв. м.): <input name="area" size="20" type="number">
<br>Количество комнат: <input name="rooms" size="20" type="number">
<br>Стоимость: <input name="cost" size="20" type="number">
<p><input name="add" type="submit" value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
<a href="index.php"> Вернуться к списку недвижимости </a>
</body>
</html>