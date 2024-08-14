<?php
function obtenerRandom(){
    return rand(1,6);               
}

$numeroRandom = obtenerRandom();
$numeroRandom2 = obtenerRandom();

$juntitos = $numeroRandom + $numeroRandom2;

echo 'Primer dado: '.$numeroRandom.'<br> Segundo dado: '.$numeroRandom2.'<br> Avanza '.$juntitos.' casillas';



?>