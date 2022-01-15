<?php

  function usl() {
    echo "<p> Если в матрице P(m,n) есть отрицательные элементы, найти наибольший из них. ";
  }
  function usl2() {
    echo "<p> Дана квадратная матрица порядка N. Для каждого столбца матрицы вычислить и
    напечатать разность между квадратом суммы и суммой квадратов элементов этого
    столбца";
  }


  function massiv($a,$n) {
     for ($i = 0; $i < $n; $i++) {
       for ($j = 0; $j < $n; $j++) {
 	$a[$i][$j]=rand(-10,10);
       }
     }
   return $a;
   }

  function out($a,$n) {
    echo "<p><table border=1 >";
    for ($i=0; $i<$n; $i++) {
      echo "<tr>";
      for ($j=0; $j<$n; $j++) {
        echo "<td align=center width=25 height=32>";
	echo $a[$i][$j];
        echo "</td>";
      }
      echo "</tr>";
      }
    echo "</table>";
  }

  function calc($a,$n) {

      $max = -100;

    for ($i=0;$i<$n;$i++){
      for ($j=0;$j<$n;$j++){

    if ($a[$i][$j]<0 and $a[$i][$j]>$max){
      $max = $a[$i][$j];
    }
    }
  }
    print("наибольшее из чисел <0 =" . $max);
  }


  function calc2($a,$n){
    $summa1col = array_sum(array_column($a,0));
    $summa2col = array_sum(array_column($a,1));
    $summa3col = array_sum(array_column($a,2));
    $summa4col = array_sum(array_column($a,3));
    $summa5col = array_sum(array_column($a,4));
    $vich1 = pow($summa1col,2)-pow($a[0][0],2)-pow($a[1][0],2)-pow($a[2][0],2)-pow($a[3][0],2)-pow($a[4][0],2);
    $vich2 = pow($summa2col,2)-pow($a[0][1],2)-pow($a[1][1],2)-pow($a[2][1],2)-pow($a[3][1],2)-pow($a[4][1],2);
    $vich3 = pow($summa3col,2)-pow($a[0][2],2)-pow($a[1][2],2)-pow($a[2][2],2)-pow($a[3][2],2)-pow($a[4][2],2);
    $vich4 = pow($summa4col,2)-pow($a[0][3],2)-pow($a[1][3],2)-pow($a[2][3],2)-pow($a[3][3],2)-pow($a[4][3],2);
    $vich5 = pow($summa5col,2)-pow($a[0][4],2)-pow($a[1][4],2)-pow($a[2][4],2)-pow($a[3][4],2)-pow($a[4][4],2);
    print ("разница квадрата суммы первого столбца и его элементов возведенных в квадрат = $vich1 <br>" );
    print ("разница квадрата суммы второго столбца и его элементов возведенных в квадрат = $vich2 <br>");
    print ("разница квадрата суммы третьего столбца и его элементов возведенных в квадрат = $vich3 <br>");
    print ("разница квадрата суммы четвертого столбца и его элементов возведенных в квадрат = $vich4 <br>");
    print ("разница квадрата суммы пятого столбца и его элементов возведенных в квадрат = $vich5 <br>");

  }

?>
