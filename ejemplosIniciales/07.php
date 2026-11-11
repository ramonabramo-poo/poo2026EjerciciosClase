<?php

// obteniendo los datos del formulario

// obtengo siempre
// var_dump($_REQUEST);

// obtengo los datos si los he mandando por GET
// var_dump($_GET);
// obtengo los datos si los he mandando por POST
// var_dump($_POST);

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

?>


<ul>
    <li>Nombre: <?= $_GET['nombre'] ?> </li>
    <li>Apellidos: <?= $apellidos ?></li>
</ul>