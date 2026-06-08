<?php
$a1 = 1;
$a2 = 1;
$a3 = 1;
$n = 10;
if ($n < 3){
    echo "A sequência deve ter pelo menos 3 termos.";
} else {
    echo $a1 . " ";
    echo $a2 . " ";
    echo $a3 . " ";
    for ($i = 4; $i <= $n; $i++) {
        $novo = $a1 + $a2 + $a3;
        echo $novo . " ";
        $a1 = $a2;
        $a2 = $a3;
        $a3 = $novo;
    }
}
?>