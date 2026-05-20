<?php
    $linha = 5;
    // Imprime um triângulo de asteriscos
    for ($i = 1; $i <= $linha; $i++) {
        //controla o astrisco em cada linha
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        } //fecha o for interno
        echo "<br>";
    } //fecha o for externo
?>