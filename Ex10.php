<?php 
function CalcularIdade($ano) {
    $anoAtual = date("X");
    $idade = $anoAtual - $ano;
    return $idade;
}
$ano = 2009;
echo "A idade é: " . CalcularIdade($ano) . "Anos";
?>

