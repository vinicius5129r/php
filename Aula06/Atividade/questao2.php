<?php
    //somar todos os numeros pares em um intervalo de 10 a 500 
    function somaPares(&$num) {
        $num += 2;
        return $num;
    }
    $soma = 0;
    for ($i=10; $i <= 500; $i = somaPares($i)) {
        echo $i.', ';
        $soma += $i;
    }
    echo "<br><hr>A soma dos números pares de 10 a 500 é: " . $soma;
?>