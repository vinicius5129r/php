<?php
    $numero = [8, 3, 15, 1, 9, 2, 5, 7, 4, 4, 10];
    for ($i = 0; $i < 10; $i++){
        for ($j = 0; $j < 10; $j++){
            if ($numero[$i] < $numero[$j]){
                $doida = $numero[$i];
                $numero[$i] = $numero[$j];
                $numero[$j] = $doida;
            }
        }
    }
    echo "Números em ordem crescente: <br><br>";
    foreach ($numero as $valor){
        echo $valor . " ";
    }
?>