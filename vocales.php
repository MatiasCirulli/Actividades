<?php 

$wow = 'hola mundo';
$woo = 'HOLA MUNDO';
$wwo = 'hOla MUndo';

function existeVocal($palabra){
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $vocalesPalabra = [];
    for ($i = 0; $i < strlen($palabra); $i++) {
        if (in_array($palabra[$i], $vocales)) {
            $vocalesPalabra[$i] = $palabra[$i]; 
        }
    }
    echo 'Las vocales de "'.$palabra.'" son: ';
    foreach($vocalesPalabra as $p){
        echo '<b>'.$p.'</b> ';
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
    <div><?php existeVocal($wow); ?></div>
    <div><?php existeVocal($woo); ?></div>
    <div><?php existeVocal($wwo); ?></div>
</body>
</html>