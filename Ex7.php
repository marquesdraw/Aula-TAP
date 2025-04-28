<?php
function aplicarAumento($salario) {
    $aumento = $salario * 0.10; 
    $novoSalario = $salario + $aumento; 
    return $novoSalario;
}


$salario = 10.600;
$novoSalario = aplicarAumento($salario);

echo "Salário original: R$ " . number_format($salario, 2, ',', '.') . "\n";
echo "Salário com aumento: R$ " . number_format($novoSalario, 2, ',', '.');
?>