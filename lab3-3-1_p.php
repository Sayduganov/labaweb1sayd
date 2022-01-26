<title> Сайдуганов Руслан ПИ-322</title>
<?
 $a=$_POST["a"];
 $b=$_POST["b"];
  if ($a>=$b) {
    if ($a==$b) { 
      echo 'Числа равны';  
   } else { echo ('Число a=' . $a); }
  } else { echo ('Число b=' . $b); }

echo ("<br> <a href='s3-1.html'> Вернуться назад </a>");
?>