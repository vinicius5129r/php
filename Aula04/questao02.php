<?php
    define('ANO_ATUAL', 2026);
    $ano_nascimento = $_POST['ano_nascimento'];
    $idade = ANO_ATUAL - $ano_nascimento;
    $dias_vividos = $idade * 365; 
    $idade_em_2025 = 2025 - $ano_nascimento;

    echo "Ano de nascimento: " . $ano_nascimento . "<br>";
    echo "Ano atual: " . ANO_ATUAL . "<br><br>";
    echo "Idade em anos: " . $idade . "<br>";
    echo "Dias vividos: " . $dias_vividos . "<br>";
    echo "Idade em 2025: " . $idade_em_2025;
?>