<?php
function ano($ano){
    if($ano % 4 == 0 && ($ano % 100 !=0 || $ano % 400 == 0)){
            echo "1";
    }else{
        echo "0";
    }
}
ano(2024);
?>