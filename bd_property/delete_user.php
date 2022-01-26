<? session_start(); 
include("check_log.php");
include("check_admin.php");
?>
<form action="<? print $PHP_SELF ?>" method="get">
<?
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
echo  '<option value='.$st['id'].'>'.iconv("cp1251", "utf-8", $st['username']).' - ';
if (iconv("cp1251", "utf-8", $st['type']) == 1) { echo 'Оператор</option>'; }
elseif (iconv("cp1251", "utf-8", $st['type']) == 2) { echo 'Администратор</option>'; }
}
echo '</select>';
?>
<input type="submit" name="del" value="Удалить">
</form>
<?
if (isset($_GET['del'])) {
 $zapros="DELETE FROM users WHERE id=".$_GET['id_user'];
 mysqli_query($conn,$zapros);
 echo '<script type="text/javascript">window.open("delete_user.php","_self");</script>';
 exit;
}
?>
<a href="index.php">Вернуться на главную</a>