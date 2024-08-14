<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function obtenerRandom(){
        return rand(2,40);               
    }
    $numeroRandom = obtenerRandom();
     
    echo "<h1>Radio del circulo: ".$numeroRandom."</h1>";
    function calcularArea($radio){
        $radio = $radio * 2;
        $area = pi() * $radio;
        echo "<h1>Area del circulo: ".$area."</h1>";
    }
    ?>
    <p> <?php echo calcularArea($numeroRandom); ?> </p>
</body>
</html>