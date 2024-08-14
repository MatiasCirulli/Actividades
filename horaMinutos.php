<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?Php 
    function obtenerRandom(){
        return rand(0,25);               
    }
    function conversorMinutos($hora) {
        $hora = $hora * 60;
        return $hora;
    }
    
    $numeroRandom = obtenerRandom();
    ?>
    <div>
        <?php 
        echo "Minuto: ".conversorMinutos($numeroRandom);?>
    </div>
</body>
</html>