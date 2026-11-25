<?php
// vamos a crear un array enumerado de arrays asociativos

$alumnos = [
    [
        "nombre" => "Ana", // $alumnos[0]['nombre']
        "edad" => 20,
        "curso" => "PHP"
    ],
    [
        "nombre" => "Juan",
        "edad" => 22,
        "curso" => "JavaScript" // $alumnos[1]['curso']
    ],
    [
        "nombre" => "María",
        "edad" => 21,
        "curso" => "Python"
    ]
];


// mostrar el array en una tabla 
include 'vistaAlumnos.php';
