<?php
// Comprobar si se ha pulsado el botón de enviar
if (!isset($_GET['enviar'])) {
    header('Location: 08.php');
    exit;
}

// Recogemos los datos directamente sin sanear
$nombre = $_GET['nombre'];
$poblacion = $_GET['poblacion'];
$edad = $_GET['edad'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09 - Datos Recibidos</title>
    <link rel="stylesheet" href="09.css">
</head>

<body>
    <div class="card">
        <h1>
            Datos Recibidos
        </h1>
        <p class="subtitle">
            Información procesada desde el formulario 08.php
        </p>

        <ul class="data-list">
            <li>
                <span class="label">Nombre completo:</span>
                <span class="value"><?= $nombre ?></span>
            </li>
            <li>
                <span class="label">Población:</span>
                <span class="value"><?= $poblacion ?></span>
            </li>
            <li>
                <span class="label">Edad:</span>
                <span class="value"><?= $edad ?> <?= is_numeric($edad) ? 'años' : '' ?></span>
            </li>
        </ul>

        <a href="08.php" class="btn-back">&larr; Volver al formulario</a>
    </div>
</body>

</html>