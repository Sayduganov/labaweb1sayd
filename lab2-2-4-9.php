<TITLE>Сайдуганов Руслан ПИ-322 </TITLE>

<?php

$a=3;

$arr=array();
$brr=array();
echo("<br>");

for ($i=0; $i<$a;$i++){
 $arr[$i]=rand(1,3);
}
for ($k=0; $k<$a;$k++){
  $brr[$k]=rand(1,3);
}
if ($brr[0] == $arr[0] and $brr[1] == $arr[1] and $brr[2] == $arr[2]){
  print("Да".'<br>');
}



print_r($arr);
print_r($brr);

?>
