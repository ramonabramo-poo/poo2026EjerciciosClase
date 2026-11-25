<?php
$consulta = 'select * from alumnos';
// $consulta = 'select * from alumnos where nota > 7';

include 'conexion.php'; // Obtengo todos los alumnos de la base de datos
include 'vistaAlumnos.php'; // Muestro los alumnos en una tabla
