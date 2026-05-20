<?php
    echo "Testando operador de atribuição: <br>";
    $a = 1; // $a = 1; // atribuição simples
    echo $a . "<br>";
    $a += 10; // $a = $a + 10; // atribuição com adição
    echo $a . "<br>";
    $a -= 10; // $a = $a - 10; // atribuição com subtração
    echo $a . "<br>";
    $a *= 10; // $a = $a * 10; // atribuição com multiplicação
    echo $a . "<br>";
    $a /= 10; // $a = $a / 10; // atribuição com divisão
    echo $a . "<br>";
    $a %= 10; // $a = $a % 10; // atribuição com módulo
    echo $a . "<br>";

    echo "<br>Testando: <br>";
    $a = 1;
    $b = 2;
    $c = $a + 2 * 3 + 4 * $b; // $c = $a + (2 * 3) + (4 * $b); // ordem de precedência
    $d = ($a + 2) * (3 + 4) * $b; // ordem de precedência com parênteses
    echo "Sem utilizar parênteses: " . $c . "<br>"; // echo "Sem utilizar parênteses: " . ($a + 2 * 3 + 4 * $b) . "<br>"; // sem parênteses
    echo "Utilizando parênteses: " . $d . "<br>"; // echo "Utilizando parênteses: " . (($a + 2) * (3 + 4) * $b) . "<br>"; // com parênteses
    echo "<br>";

    // Conversão automática de operadores
    $e = '1'; // $e = '1'; // string
    echo "Conversão automática de string para inteiro: " . ($e + 1) . "<br>"; // $e + 1; // string é convertida para inteiro
    $f = 1; // $f = 1; // inteiro
    echo "Conversão automática de inteiro para string: " . ($f . "1") . "<br>"; // $f . "1"; // inteiro é convertido para string

    echo "<br>Incremento e decremento: <br>";
    $a;
    $b = 10;
    echo "<br>";
    echo "O valor inicial de a é: " . $a . "<br>"; // echo "O valor inicial de a é: " . $a . "<br>"; // variável não inicializada
    echo "O valor inicial de b é: " . $b . "<br>"; // echo "O valor inicial de b é: " . $b . "<br>"; // variável inicializada
    echo "<br>";
    echo "Operação: a = b++ (atribuição pós-incremento) <br>"; // echo "Operação: a = b++ (atribuição pós-incremento) <br>"; // pós-incremento
    $a = $b++; // $a = $b; $b = $b + 1; // pós-incremento
    echo "O valor de a: " . $a . " e de valor de b: " . $b . "<br>"; // echo "O valor de a: " . $a . "e de valor de b: " . $b . "<br>"; // pós-incremento
    echo "<br>";
    echo "Operação: a = ++b (atribuição pré-incremento) <br>"; // echo "Operação: a = ++b (atribuição pré-incremento) <br>"; // pré-incremento
    $a = ++$b; // $b = $b + 1; $a = $b; // pré-incremento
    echo "O valor de a: " . $a . " e de valor de b: " . $b . "<br>"; // echo "O valor de a: " . $a . "e de valor de b: " . $b . "<br>"; // pré-incremento
?>