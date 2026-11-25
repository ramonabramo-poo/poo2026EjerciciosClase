<?php

// estableciendo una conexion con servidor de mysql
$conexion = mysqli_connect('localhost', 'root');

// cambiar la base de datos activa
mysqli_select_db($conexion, 'curso_web');

// colocando mi consulta como string
// $consulta = 'select * from alumnos';

// ejecutando la consulta sobre la conexion
$resultado = mysqli_query($conexion, $consulta);

// obteniendo todos los registros
$alumnos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
