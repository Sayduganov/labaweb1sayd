<title> Сайдуганов Руслан ПИ-322</title>
<?php

  $a=round((rand(10,20)/rand(1,10)),1);
  $b=round((rand(10,20)/rand(1,10)),1);
  if ($a==$b){
    $b-=0.2;
  }

  print ('a=' . $a . '<br> b=' . $b);

  function ut($u, $t) {
    $f=0;
    if ($u>=0 and $t>=0) {
      $f=$u-2*$t;
    }
    elseif ($u<0 and $t>=0) {
      $f=$u+$t;
    }
    elseif ($u>=0 and $t<0) {
      $f=pow($u,2)-2*$t;
    }
    elseif ($u<0 and $t<0){
      $f=$u*$t+3*$t;
    }
    return $f;
  }

  print ('<p>z=' . round(ut($a,pow($b,2)-$a) + ut($a,$b)));

?>
