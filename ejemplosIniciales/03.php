<?php
// crear variable y asignar valor
$nombre = 'ramon';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mi primera pagina en php</h1>
    <!-- impresion larga -->
    <p>
        Hoy es
        <?php
        // impresion larga
        echo date('d/m/Y');
        ?>
    </p>

    <!-- impresion corta -->
    <p>
        Hoy es <?= date('d/m/Y') ?>
    </p>

    <div>
        <?= "{$nombre}" ?>
    </div>

</body>

</html>