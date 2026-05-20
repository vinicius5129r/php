<?php
//de 100 a 200, de 2 em 2
    function dois(&$num) {
        $num += 2;
        return $num;
    }
    for ($i=100; $i <= 200; $i = dois($i)) { 
        echo $i.' ';
    }
?>