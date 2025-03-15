<?php
//aula de funções

function saudacao($nome){
    echo "$nome, seja bem-vinda ao site!";
    if($idade > 18){
        echo "Você esta apto para participar do processo!";
        echo "<br>";
        echo "<br>";
    }   else{
            echo "Você não esta apto para participar do processo!";
            echo "<br>";
            echo "<br>";

    }

}

saudacao("Eder", 25);
saudacao("Miriã", 16);
saudacao("João", 18);




?>