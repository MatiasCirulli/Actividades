<?php 
function obtenerRandom(){
    return rand(10,99);               
}

$matriz = [];

function randomVario($length){
    for ($i = 0; $i < $length; $i++) {
        $rando = obtenerRandom();
        $matriz[] = $rando;
    }    
    foreach ($matriz as $key) {
        echo ' '.$key.' |';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Matriz A =</p>
    <div>
       [ | <?php randomVario(3); ?> ]
    </div>
    <div>
       [ |<?php randomVario(3); ?> ]
    </div>
    <div>
       [ | <?php randomVario(3); ?> ]
    </div>
</body>
</html>