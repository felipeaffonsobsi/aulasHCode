<?php

$soma = 0;
$numero1 = 350;
$numero2 = 10;

echo somar($numero1, $numero2) . "<br>";

$soma = $numero1 + $numero2;
echo $soma . "<br>";

$numero1 = $numero1 + $numero2;
echo $numero1 . "<br>";

$numero1 = 350;

$numero1 += $numero2;
echo $numero1 . "<br>";



function somar($n1, $n2)
{
    $somar = $n1 + $n2;
    return $somar;
}
?>