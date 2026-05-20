<?php
    $numero = $_POST['numero'];
    echo "<h1>Tabuada do $numero</h1>";
        echo "<a href='questao01.html'>Voltar</a>";
        echo "<hr>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
?>