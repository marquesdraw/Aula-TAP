<?php
$notas = [8.0,4.5,7.0,2.9];

$soma = array_sum($notas);
$quantidade = count($notas);
$média = $soma / $quantidade;

if ($média >=8.0) {
    echo "Aprovado com média: " . $média;
} else {
    echo "Reprovado com média: " . $média;
}
?>