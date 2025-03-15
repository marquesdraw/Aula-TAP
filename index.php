<?php
//aula de funções

function saudacao($nome, $idade){
    echo "$nome, seja bem-vinda ao site! <br>";
    if($idade > 18){
        echo "Você esta apto para participar do processo! <br>";
        echo "<br>";
        echo "<br>";
    }   else{
            echo "Você não esta apto para participar do processo! <br>";
            echo "<br>";
            echo "<br>";

    }

}

saudacao("Eder", 25);
saudacao("Miriã", 16);
saudacao("João", 18);




?>
