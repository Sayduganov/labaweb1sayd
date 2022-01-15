<title> Сайдуганов Руслан ПИ-322 </title>
<p> Вариант 4</p>
<p>  Найти все целые числа из интервала от N до М, которые делятся на сумму всех своих
цифр. N и М – случайные числа. </p>
<?php
const TRIPLEX = 1/3;
 
function getPair(int $num) { // checks pair existing
    $max = floor(pow($num, TRIPLEX)); # корень кубический
    while ($max) {
        for ($i=1; $i<=$max; ++$i) {
            if (pow($i, 3) + pow($max, 3) == $num)
                return [$max, $i];
        }
        --$max;
    }
    return NULL;
}

function getIts(int $start, int $end) { // generator
    if ($start < 1 || $end < 1) {
        trigger_error('Warn: Arguments for getIts() must be >= 1 both', E_USER_WARNING);
        return NULL;
    }
    if ($end < $start) [$start, $end] = [$end, $start];

    for ($i = $start; $i <= $end; ++$i) {
        if(!$tmp = getPair($i))
            continue;
        echo "$i = $tmp[0]^3 + $tmp[1]^3\n";
        yield $i; // типа return в каждой итерацмм
    }
}

$found = 0;
echo "<pre>\n",
    '$N=',  $N=rand (1,2), "\n",
    '$M=',  $M=rand (110,220), "\n\n";

foreach (getIts($N, $M) as $num) {
//    echo " $num\n";
    ++$found;
}

if (!$found) echo "Не найдено.\n";
else echo "Найдено $found чисел.\n";
echo "\n</pre>\n";
?>
