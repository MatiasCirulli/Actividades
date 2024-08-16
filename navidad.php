<?php 

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fechaActual = new DateTime(date('Y-m-d'));
$navidad = new DateTime('2024-12-25');

$diff = $fechaActual->diff($navidad);

echo 'Faltan '.$diff->days . ' para navidad ';

?>
