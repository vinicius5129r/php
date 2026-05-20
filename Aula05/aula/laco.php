<?php
    echo "while: <br>";
    $a = 1;
    while ($a <= 10) {
        echo 'O número é: ' . ++$a . '<br>';
    }

    echo "<br>do while: <br>";
    $b = 11;
    do {
        echo 'O número é: ' . ++$b . '<br>';
        $b++;
    } while ($b < 10);

    echo "<br>for: <br>";
    for ($c = 1; $c <= 10; $c++) {
        echo 'O número é: ' . $c . '<br>';
    }

    echo "<br>foreach: <br>";
    $array = [1, 2, 3, 4, 5];
    foreach ($array as $value) {
        echo 'O número é: ' . $value . '<br>';
    }
?>