<?php

// estableciendo una conexion con servidor de mysql
$conexion = mysqli_connect('localhost', 'root');

// colocando mi consulta como string
$consulta = 'select * from alumnos';

// ejecutando la consulta sobre la conexion
$alumnos = mysqli_query($conexion, $consulta);
