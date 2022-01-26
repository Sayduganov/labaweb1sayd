<title> Сайдуганов Руслан ПИ-322</title>
<meta charset="utf-8">
<?
if (isset($_POST["f1"])) {
$str=$_POST["text1"];
$strint=(string)(int)$_POST["text1"];
$strfloat=(string)(float)$_POST["text1"];


  if ($str === $strint)  echo "1"; 
  elseif ($str === $strfloat)  echo "2"; 
  else echo "0";
  }

if (isset($_POST["f2"])) {
  $text2=$_POST["text2"];
  $str = preg_split('//u', $text2, null, PREG_SPLIT_NO_EMPTY);
  $cn = count($str);
  for($i=0; $i<=$cn; $i++){
	  if($po3>2){
		  $out = $out . "е";
		  $po3=0;
	  }
	  $out = $out . $str[$i];
	  $po3++;
  }
  echo $out;
} 

if (isset($_POST["f3"])) {
  $str = $_POST["text3"];
  $s=$_POST["word"];
  $z = str_replace($_POST["word"], '',$_POST["text3"]);

  if(is_array($z)){
  foreach($z as $value){
    if($value == $s){
        $symbl_1 = $symbl_2;
          }
        }
    }
  echo" $z";

}

?>