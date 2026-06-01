<?php
    $quantidade = 15; // Define a quantidade de números a serem gerados
    $a = 0; // Inicializa a variável 'a' com o valor 0
    $b = 1; // Inicializa a variável 'b' com o valor 1
    echo "Sequência de Fibonacci: <br><br>"; // Exibe uma mensagem indicando que a sequência de Fibonacci será exibida
    for ($i = 1; $i <= $quantidade; $i++) {
        echo $a . " ";
        $proximo = $a + $b; // Calcula o próximo número da sequência de Fibonacci
        $a = $b; // Atualiza o valor de 'a' para o próximo número
        $b = $proximo; // Atualiza o valor de 'b' para o próximo número
    }