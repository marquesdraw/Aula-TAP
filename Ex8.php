<?php

function maiornumero($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
$num1 = 10;
$num2 = 50;
$num3 = 100;

echo "O maior número é: " . maiornumero($num1, $num2, $num3);

?>