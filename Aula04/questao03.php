<?php
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);

    echo "Peso: " . $peso . " kg<br>";
    echo "Altura: " . $altura . " m<br>";
    echo "IMC: " . number_format($imc, 2) . "<br>";

    if ($imc < 18.5) {
        echo "Classificação: Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25) {
        echo "Classificação: Peso normal";
    } elseif ($imc >= 25 && $imc < 30) {
        echo "Classificação: Acima do peso";
    } else {
        echo "Classificação: Obesidade";
    }
?>