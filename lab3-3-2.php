<title> Сайдуганов Руслан ПИ-322</title>
<body>
<h3> Калькулятор </h3>
<p>Введите числа с точностью до сотой
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>a=<INPUT type="number" step="0.01" name="a">
    b=<INPUT type="number" step="0.01" name="b">
 <br>
 <p>действие:<SELECT NAME="z" SIZE="1">
  <OPTION VALUE="1" SELECTED> сложить
  <OPTION VALUE="2"> вычесть
  <OPTION VALUE="3"> умножить
  <OPTION VALUE="4"> разделить
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Посчитать">
</form>

<?
$a=$_POST["a"];
$b=$_POST["b"];
if (isset($_POST["obr"])) {

  switch($_POST["z"]) {
   case 1:
    echo ($a . '+' . $b . '=');
    echo $a+$b;
    break;
   case 2:
    echo ($a . '-' . $b . '=');
    echo $a-$b;
    break;
   case 3:
    echo ($a . '*' . $b . '=');
    echo $a*$b;
    break;
   case 4:
    echo ($a . '/' . $b . '=');
    echo $a/$b;
    break;
  }
}
?>