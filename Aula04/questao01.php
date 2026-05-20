<?php
    define('PI', 3.141592); // define faz a constante PI por ser um valor que não pode ser alterado durante a execução do programa
    $raio = 5;
    $area = 4 * PI * $raio * $raio;
    $volume = (4/3) * PI * $raio * $raio * $raio;
    echo "Raio da esfera: " . $raio . "<br>";
    echo "Valor de PI: " . PI . "<br>";
    echo "<br>Resultados:<br>";
    echo "Área da esfera: " . $area . "<br>";
    echo "Volume da esfera: " . $volume;
?>