<title> Сайдуганов Руслан ПИ-322</title>
<p>Вариант 10</p>
<?php
  $a=rand(-20,20);
  $b=rand(-20,20);
  $c=rand(-20,20);
  $d=rand(-20,20);
  print ('$a=' . $a . '<br>' . '$b=' . $b . '<br>' . '$c=' . $c . '<br>' . '$d=' . $d . '<br>');
  print ('Функция равна ' . (((2 * $c)/$d)+2)/($d - pow($a, 2) - 1) . '<br>');
  print ('Функция равна '. "(((2*$c)/$d)+2)/($d - ($a^2) - 1)" );
?>