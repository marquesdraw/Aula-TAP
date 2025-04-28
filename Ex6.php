<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function classificarIMC($imc) {
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        return "Obesidade grau 1";
    } elseif ($imc >= 35 && $imc < 39.9) {
        return "Obesidade grau 2";
    } else {
        return "Obesidade grau 3";
    }
}


$peso = 90;
$altura = 1.98; 
$imc = calcularIMC($peso, $altura);
$classificacao = classificarIMC($imc);

echo "Seu IMC é: " . number_format($imc, 2) . "\n";
echo "Classificação: " . $classificacao;
?>