<?php

$dias = [
    'Lunes',
    'Martes',
    'Miercoles',
    'Jueves',
    'Viernes',
    'Sabado',
    'Domingo'
];


// conocer la longitud del array
$longitud =  count($dias);

var_dump('longitud', $longitud);

var_dump('dias', $dias);

for ($c = 0; $c < $longitud; $c++) {
    echo "<div>{$dias[$c]}</div>";
}

$salida = '';
for ($c = 0; $c < $longitud; $c++) {
    $salida .= "<div>{$dias[$c]}</div>";
}

?>

<div>
    <?= $salida ?>
</div>