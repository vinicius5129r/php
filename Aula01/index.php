<?php
    // Delimitador de código PHP

    // comentário de uma única linha
    # Outra forma de comentário de uma única linha
    /* 
        comentário de múltiplas linhas
    */
    echo "Olá, mundo! Bem vindo ao PHP " . date("d/m/Y") . "."; // Exibe uma mensagem na tela e quebra a linha
    echo "<br>"; // Quebra de linha
    // Testando comandos de saída
    echo 'a <br>', "b";
    echo "<br>"; // Quebra de linha
    print ('ab'); // Exibe o valor da variável ab
    echo "<br>"; // Quebra de linha

    // utilizando var_dump para exibir informações sobre uma variável
    echo "<br>Utilizando var_dump";
    $a = array("abc", "b", "c", "d", "e");
    echo "<br>"; // Quebra de linha
    var_dump($a); // Exibe informações sobre a variável $a, incluindo seu tipo e conteúdo

    // Utilizando print_r para formatar a saída
    echo "<br> Utilizando print_r <br>";
    $a = array("a", "b", "c");
    echo "<br>"; // Quebra de linha
    print_r($a); // Exibe informações sobre a variável $a, incluindo seu tipo e conteúdo

    // Testando variáveis
    $nome = "João"; // Variável do tipo string
    echo "<br>";
    echo "<br> Nome: " . $nome; // Exibe o valor da variável $nome
    /*
    $a = 1; // Variável do tipo inteiro
    $b = 2; // Variável do tipo inteiro
    $c = 3; // Variável do tipo inteiro
    echo "<br> Variáveis: " . $a . ", " . $b . ", " . $c; // Exibe os valores das variáveis $a, $b e $c
    echo "<br> Soma: " . ($a + $b + $c). "😀 😎"; // Exibe a soma das variáveis $a, $b e $c
    */

    $a = 1; // Variável do tipo inteiro
    $b = 2; // Variável do tipo inteiro
    $c = $a + $b; // Variável do tipo inteiro, resultado da soma de $a e $b
    function soma() {
        // global $c; // Acessa a variável global $c dentro da função
        // echo "C é igual a: " . $c; // Exibe o valor da variável $c dentro da função
        echo "C é igual a: " . $GLOBALS['c']; // Exibe o valor da variável $c usando o array superglobal $GLOBALS para acessar a variável global $c dentro da função
    }

    echo "<br> A é igual a: " . $a; // Exibe o valor da variável $a
    echo "<br> B é igual a: " . $b; // Exibe o valor da variável $b
    echo "<br>";
    soma(); // Chama a função soma para exibir o valor de $c
?>