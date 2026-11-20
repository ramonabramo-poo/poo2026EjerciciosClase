<?php

$dias = [
    'Lunes',
    'Martes',
    'Miercoles'
];


foreach ($dias as $indice => $valor) {
    echo "<div>{$valor}</div>";
    // echo "<div>{$dias[$indice]}</div>";
}

for ($indice = 0; $indice < count($dias); $indice++) {
    echo "<div>{$dias[$indice]}</div>";
}

$alumnos = [
    "nombre" => "Ana",
    "edad" => 20,
    "poblacion" => 'Santander'
];

foreach ($alumnos as $campo => $valor) {
    echo "<div>{$campo}: {$valor}</div>";
}
