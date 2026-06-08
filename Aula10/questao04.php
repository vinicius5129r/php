<?php
$v = [3, 5, 7, 2, 8, 10, 4, 6, 1, 9];
$valor = 8;
$posicao = -1;
for ($i = 0; $i <10; $i++){
    if ($v[$i] == $valor){
        $posicao = $i;
    }
}
if ($posicao == -1){
    echo "-1";
}else {
    echo "Valor encontrado na posição: " . $posicao;
}
?>