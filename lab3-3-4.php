<title> Сайдуганов Руслан ПИ-322</title>
<body>
<h3> Задача 3.4 </h3>
<p>Проверка регистрации:
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>Логин: <INPUT type="text" name="n">
 <P> <INPUT type="submit" name="obr" value="Проверить">
</form>

<?
$n=$_POST["n"];
$arr=array();
$arr[0]="Иванов Иван Иванович";
$arr[1]="Петров Петр Петрович";
$arr[2]="Сидоров Лаврентий Геннадьевич";
$arr[3]="Шолохов Николай Григорьевич";
if (isset($_POST["obr"])) {

  for ($i = 0; $i < count($arr); $i++) {
    if ($n == $arr[$i]) { echo 'Здравствуйте, ' . $n; $acc=false; break;}
    else { $acc=true; }
  }
  if ($acc) { echo 'Вы не зарегистрированный пользователь!';}

}

?>