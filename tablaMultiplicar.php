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
        return rand(1,10);               
    }

    $numeroRandom = obtenerRandom();
    function tablas($numero){
       for ($i = 0; $i < 11; $i++) { ?>
       
       <li><?php echo $numero ?> x <?php echo $i ?> = <?php echo $numero*$i ?> </li>
       <?php }
    }
    ?>
    <div> Tabla del <?php echo $numeroRandom ?> </div>
    <ul>
        <?php 
        echo tablas($numeroRandom);?>
    </ul>
</body>
</html>