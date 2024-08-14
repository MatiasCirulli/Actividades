<?php 
function obtenerRandom(){
    return rand(0,100);               
}

$numeroRandom = obtenerRandom();
$numeroRandom2 = obtenerRandom();
$numeroRandom3 = obtenerRandom();

echo "<div>".$numeroRandom."</div><div>".$numeroRandom2."</div><div>".$numeroRandom3."</div>";

function mayor($num1, $num2, $num3) {
    if ($num1 > $num3 && $num1 > $num2) {
        echo "<h3>".$num1."</h3>";
    } else if ($num2 > $num3 && $num2 > $num1) {
        echo "<h3>".$num2."</h3>";
    } else if ($num3 > $num1 && $num3 > $num2) {
        echo "<h3>".$num3."</h3>";
    }
}

mayor($numeroRandom, $numeroRandom2, $numeroRandom3);