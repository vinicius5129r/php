<?php
$temperatura = $_POST['temperatura'];
if ($temperatura >= 40) {
    echo "Risco Elevado";
} else if ($temperatura >= 39.0 && $ temperatura <=39.9){
    echo "Febre Alta";
} else if ($temperatura >= 37.8 && $temperartura <= 38.9){
    echo "Febre";
} else if ($temperatura >= 37.3 && $temperatura <= 37.7){
    echo "Atenção";
} else if ($temperatura >= 36 && $temperatura <= 37.2){
    echo "Normal";
} else {
    echo "Hipotermia";
}
?>