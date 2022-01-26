<? session_start(); include("check_log.php");
 // Подключение к базе данных:
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
 // Строка запроса на добавление записи в таблицу:
 
 $sql_add = "INSERT INTO housemates SET fullname='" . iconv("utf-8", "cp1251", $_GET['fullname'])
."', birthdate='".$_GET['birthdate']."', id_house='".(int)$_GET['z']."'";
 mysqli_query($conn,$sql_add); // Выполнение запроса
 if (mysqli_affected_rows($conn)>0) // если нет ошибок при выполнении запроса
 { print "<p> Информация внесена в базу данных.";

 print "<p><a href=\"index.php\"> Вернуться к списку недвижимости </a>"; }
 else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку недвижимости </a>"; }
?>
