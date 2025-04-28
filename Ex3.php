<?php
function calcularFatorial($numero) {
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}


$numero = 80; 
echo "O fatorial de $numero é: " . calcularFatorial($numero);
?>