<?php
//testando booleano
$mostraMenssagem = false; // Variável do tipo booleano, indicando se a mensagem deve ser mostrada ou não
if ($mostraMenssagem) { // Verifica se a variável $mostraMenssagem é verdadeira
    echo "A mensagem será exibida."; // Exibe a mensagem se $mostraMenssagem for verdadeira
} else {
    echo "A mensagem não será exibida.<br>"; // Exibe a mensagem se $mostraMenssagem for falsa
}

//testando inteiro
//número decimal
$a = 1234; // Variável do tipo inteiro, armazenando um número decimal
//número negativo
$b = -5678; // Variável do tipo inteiro, armazenando um número negativo
//número octal (equivalente a 83 em decimal)
$c = 0123; // Variável do tipo inteiro, armazenando um número octal
//número hexadecimal (equivalente a 255 em decimal)
$d = 0x1A; // Variável do tipo inteiro, armazenando um número hexadecimal
echo '<br>a = '.$a."<br>"; // Exibe o valor da variável $a
echo 'b = '.$b."<br>"; // Exibe o valor da variável $b
echo 'c = '.$c."<br>"; // Exibe o valor da variável $c
echo 'd = '.$d."<br>"; // Exibe o valor da variável $d
//testando números de ponto flutuantes
$e = 1.25; // Variável do tipo float, armazenando um número de ponto flutuante
$f = 1.2e3; // Variável do tipo float, armazenando um número de ponto flutuante em notação científica (equivalente a 1200)
echo 'e = '.$e."<br>"; // Exibe o valor da variável $e
echo 'f = '.$f."<br>"; // Exibe o valor da variável $f
//testando string
$exemplo1 = '<br>Programação Web'; // Variável do tipo string, armazenando um texto com quebra de linha
$exemplo2 = '3º TI Matutino'; // Variável do tipo string, armazenando um texto
echo $exemplo1."<br>"; // Exibe o valor da variável $exemplo1
echo $exemplo2."<br>"; // Exibe o valor da variável $exemplo2
//testando vetor (array)
echo "Nomes com P <br>"; // Exibe um título para a lista de nomes
$nomesComP = array('Paulo', 'Pedro', 'Patrícia', 'Paola', 'Patrícia'); // Variável do tipo array, armazenando uma lista de nomes
echo $nomesComP[0]."<br>"; // Exibe o primeiro nome da lista

echo "<br> nomes com A <br>"; // Exibe um título para a lista de nomes
$nomesComA = array("primeiro" => "Amanda", "segundo" => "Ana", "terceiro" => "Amadeu", "quarto" => "André"); // Variável do tipo array associativo, armazenando uma lista de nomes com chaves associativas
echo $nomesComA["primeiro"]."<br>"; // Exibe o primeiro nome da lista
?>