<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php 
    for ($i = 0; $i < 101; $i++) { 
        echo "<div><li>".$i."</li></div>";
    }
    ?>
    </ul>
</body>
</html>