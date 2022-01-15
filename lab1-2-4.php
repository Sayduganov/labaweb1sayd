<title> Сайдуганов Руслан ПИ-322 </title>
<p> Вариант 4</p>
<p>  Найти все целые числа из интервала от N до М, которые делятся на сумму всех своих
цифр. N и М – случайные числа. </p>
<?php
function getIts($start, $end) {
  for ($i = $start; $i <= $end; ++$i) {
      $summ = 0;
      $tmp = $i;
      while ($tmp) {
          $summ += $tmp % 10;
          $tmp = floor($tmp/10);
      }
      if ($i % $summ) continue;
      yield $i; // типа return в каждой итерацмм
  }
}

$found = 0;
echo "<pre>\n",
  '$N=',  $N=rand (100,110), "\n",
  '$M=',  $M=rand (120,130), "\n\n";

foreach (getIts($N, $M) as $num) {
  echo " $num\n";
  ++$found;
}

if (!$found) echo "Не найдено.\n";
else echo "Найдено $found чисел.\n";
echo "\n</pre>\n";
?>
