<title> Сайдуганов Руслан ПИ-322</title>
<body>
<h3> Анкета: Ваш характер </h3>

<form method="POST" action="<?php print $PHP_SELF ?>">
<p>Ваше имя: <input type="text" name="name" required>

<?
$name = $_POST["name"];
$rez = 0;
echo '<p>';
if (isset($_POST["obr"])) {
  if ($_POST["v1"]=="n") { $rez++;}
  if ($_POST["v2"]=="n") { $rez++;}
  if ($_POST["v3"]=="y") { $rez++;}
  if ($_POST["v4"]=="n") { $rez++;}
  if ($_POST["v5"]=="n") { $rez++;}
  if ($_POST["v6"]=="n") { $rez++;}
  if ($_POST["v7"]=="n") { $rez++;}
  if ($_POST["v8"]=="n") { $rez++;}
  if ($_POST["v9"]=="y") { $rez++;}
  if ($_POST["v10"]=="y") { $rez++;}
  if ($_POST["v11"]=="n") { $rez++;}
  if ($_POST["v12"]=="n") { $rez++;}
  if ($_POST["v13"]=="y") { $rez++;}
  if ($_POST["v14"]=="y") { $rez++;}
  if ($_POST["v15"]=="n") { $rez++;}
  if ($_POST["v16"]=="n") { $rez++;}
  if ($_POST["v17"]=="n") { $rez++;}
  if ($_POST["v18"]=="n") { $rez++;}
  if ($_POST["v19"]=="y") { $rez++;}
  if ($_POST["v20"]=="n") { $rez++;}

  if ($rez < 8) { echo $name . ', Вашим друзьям можно посочувствовать'; }
  elseif ($rez > 15) { echo $name . ', у Вас покладистый характер'; }
  else { echo $name . ', Вы не лишены недостатков, но с Вами можно ладить'; }
}

?>


<p> 1. Считаете ли Вы, что у многих ваших знакомых хороший характер? <br>
    <input type="radio" name="v1" value="y" checked /> Да
    <input type="radio" name="v1" value="n" /> Нет <br>
<p> 2. Раздражают ли Вас мелкие повседневные обязанности? <br>
    <input type="radio" name="v2" value="y" checked /> Да
    <input type="radio" name="v2" value="n" /> Нет <br>
<p> 3. Верите ли Вы, что ваши друзья преданы Вам? <br>
    <input type="radio" name="v3" value="y" checked /> Да
    <input type="radio" name="v3" value="n" /> Нет <br>
<p> 4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание? <br>
    <input type="radio" name="v4" value="y" checked /> Да
    <input type="radio" name="v4" value="n" /> Нет <br>
<p> 5. Способны ли Вы ударить собаку или кошку?  <br>
    <input type="radio" name="v5" value="y" checked /> Да
    <input type="radio" name="v5" value="n" /> Нет <br>
<p> 6. Часто ли Вы принимаете лекарства?  <br>
    <input type="radio" name="v6" value="y" checked /> Да
    <input type="radio" name="v6" value="n" /> Нет <br>
<p> 7. Часто ли Вы меняете магазин, в который ходите за продуктами?  <br>
    <input type="radio" name="v7" value="y" checked /> Да
    <input type="radio" name="v7" value="n" /> Нет <br>
<p> 8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись? <br>
    <input type="radio" name="v8" value="y" checked /> Да
    <input type="radio" name="v8" value="n" /> Нет <br>
<p> 9. Тяготят ли Вас общественные обязанности?  <br>
    <input type="radio" name="v9" value="y" checked /> Да
    <input type="radio" name="v9" value="n" /> Нет <br>
<p> 10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?  <br>
    <input type="radio" name="v10" value="y" checked /> Да
    <input type="radio" name="v10" value="n" /> Нет <br>
<p> 11. Часто ли Вам приходят в голову мысли о Вашей невезучести?  <br>
    <input type="radio" name="v11" value="y" checked /> Да
    <input type="radio" name="v11" value="n" /> Нет <br>
<p> 12. Сохранилась ли у Вас фигура по сравнению с прошлым?  <br>
    <input type="radio" name="v12" value="y" checked /> Да
    <input type="radio" name="v12" value="n" /> Нет <br>
<p> 13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?  <br>
    <input type="radio" name="v13" value="y" checked /> Да
    <input type="radio" name="v13" value="n" /> Нет <br>
<p> 14. Нравится ли Вам семейная жизнь?  <br>
    <input type="radio" name="v14" value="y" checked /> Да
    <input type="radio" name="v14" value="n" /> Нет <br>
<p> 15. Злопамятны ли Вы?   <br>
    <input type="radio" name="v15" value="y" checked /> Да
    <input type="radio" name="v15" value="n" /> Нет <br>
<p> 16. Находите ли Вы, что стоит погода, типичная для данного времени года?  <br>
    <input type="radio" name="v16" value="y" checked /> Да
    <input type="radio" name="v16" value="n" /> Нет <br>
<p> 17. Случается ли Вам с утра быть в плохом настроении? <br>
    <input type="radio" name="v17" value="y" checked /> Да
    <input type="radio" name="v17" value="n" /> Нет <br>
<p> 18. Раздражает ли Вас современная живопись? <br>
    <input type="radio" name="v18" value="y" checked /> Да
    <input type="radio" name="v18" value="n" /> Нет <br>
<p> 19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <br>
    <input type="radio" name="v19" value="y" checked /> Да
    <input type="radio" name="v19" value="n" /> Нет <br>
<p> 20. Надоедает ли Вам делать лабораторные по PHP?  <br>
    <input type="radio" name="v20" value="y" checked /> Да
    <input type="radio" name="v20" value="n" /> Нет <br>
<P> <INPUT type="submit" name="obr" value="Узнать результат">
</form>

