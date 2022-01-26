<? session_start(); 
include("check_log.php");
include("check_admin.php");
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
 $zapros="DELETE FROM property WHERE id=" . $_GET['id'];
 mysqli_query($conn,$zapros);
 header("Location: index.php");
 exit;
?>
