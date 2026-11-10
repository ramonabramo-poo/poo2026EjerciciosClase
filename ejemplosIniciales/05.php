<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hola clase</h1>
    <div>
        <?php

        /* 
        Creando una variable y asignandole un valor de tipo string  
        */

        // $variable = 'valor';
        $fecha = date('d-m-Y');

        // impresion
        echo "- {$fecha} -";

        ?>

        <ul>
            <li>Fecha actual: <?= $fecha ?></li>
        </ul>
    </div>
</body>

</html>