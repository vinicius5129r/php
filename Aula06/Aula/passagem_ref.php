<?php
    function dobro(&$num) {
        $num *= 2;
    }
    $a = 8;
    echo 'Dobro de '.$a.' é ';
    dobro($a);
    echo $a;
?>