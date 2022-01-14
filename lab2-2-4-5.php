<HTML>
<TITLE>Сайдуганов Руслан ПИ-322 </TITLE>
<BODY>

<TABLE border=1>
<?php
$p=rand(1,9);
$count = 0;
$sh = 0;
$rav = 0;
$ravv = 0;
for ($i=0; $i<=$p; $i++) {
  echo ("<tr>");
    for ($k=0; $k<=$p; $k++) {
    echo "<td align=center width=25 height=32>";
    $a[$i][$k]=rand(1,15);
    echo ($a[$i][$k]);
    $s+=$a[$i][$k];
    $count++;
    echo ("</td>");
   }
  
  echo ("</tr>");
}

echo "<br>";
$avg = $s/$count;
echo ("ср знач S  = $avg". '<br>');
for ($i=0; $i<=$p; $i++) {
  for ($k=0; $k<=$p; $k++) {
    if ($a[$i][$k]<$avg) {
      $sh++;
    }
    elseif ($a[$i][$k]>$avg){
      $rav++;
    }
    elseif ($a[$i][$k]=$avg){
      $ravv++;
    }

}
}
echo ("количество эл равно S=$ravv" . '<br>');
echo ("количество эл больше S=$rav" . '<br>');
echo ("количество эл меньше S=$sh" . '<br>');
?>

</TABLE>
</BODY>
</HTML>
