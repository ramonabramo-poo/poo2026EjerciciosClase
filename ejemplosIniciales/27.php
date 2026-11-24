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

// Array asociativo
$alumnos = [
    "nombre" => "Ana",
    "edad" => 20,
    "poblacion" => 'Santander'
];

// Recorremos el array asociativo
foreach ($alumnos as $campo => $valor) {
    echo "<div>{$campo}: {$valor}</div>";
}












