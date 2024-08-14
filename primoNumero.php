<?php 

function obtenerRandom(){
    return rand(2,10);               
}

$numeroRandom = obtenerRandom();
echo '<b>'.$numeroRandom.'</b>';


function primo($numero) {
    $contador =  0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $contador++;
        }
    }
    if ($contador == 2) {
        echo '<div>Ese numero es primo</div>';
    } else {
        echo '<div>Ese numero no es primo</div>';
    }
}

primo($numeroRandom);

?>