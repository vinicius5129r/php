<?php
$linhas = 5;
for ($i = 1; $i <= $linhas; $i++) {
    for ($j = 1; $j <= $linhas - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $i;
    }
    echo "<br>";
}
?>