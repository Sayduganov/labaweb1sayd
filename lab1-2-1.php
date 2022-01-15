<HTML>
<TITLE>Сайдуганов Руслан ПИ-322 </TITLE>
<BODY>

<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) {
  echo ("<tr>");
    for ($k=1; $k<=10; $k++) {
    echo ("<td align=center>");
    if (($k%2)==0) {
    echo ("<font color='red'>");
    }
    $p=$k+($i-1)*10;
    echo ($p);
    echo ("</td>");
   }
  echo ("</tr>");
}
?>

</TABLE>
</BODY>
</HTML>
