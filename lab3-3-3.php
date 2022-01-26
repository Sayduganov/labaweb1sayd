<title> Сайдуганов Руслан ПИ-322</title>
<body>
<h3> Задача 3.3 </h3>
<p>Введите N, и я выведу вам все числа из диапазона [1, N] в виде 4-х списков: четные, нечетные, простые, составные
<form method="POST" action="<?php print $PHP_SELF ?>">
 <p>N=<INPUT type="number" name="n">
 <P> <INPUT type="submit" name="obr" value="Выдать результат">
</form>

<?
$n=$_POST["n"];

if (isset($_POST["obr"])) {

  echo '<p><table border=1>';
  echo '<tr><td style="vertical-align:top">Четные:';
 
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) { echo ('<br>' . $i); }
  }

  echo '<td style="vertical-align:top">Нечетные:';

  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 != 0) { echo ('<br>' . $i); }
  }

  echo '<td style="vertical-align:top">Простые:';

  for ($i = 1; $i <= $n; $i++) {
    if (check($i)==True)
      echo ('<br>' . $i);
  }

  echo '<td style="vertical-align:top">Составные:';

  for ($i = 1; $i <= $n; $i++) {
    if (check($i)!=True)
      echo ('<br>' . $i);
  }

}

function check($num) {
$check = True;
$s = floor(sqrt($num));
for ($i = 2; $i <= $s; $i++)
 {
  if ($num % $i == 0) 
  {
   $check = False;
   break;
  }               
 }
return $check;
}
?>