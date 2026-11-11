<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08 - Formulario</title>
    <link rel="stylesheet" href="08.css">
</head>

<body>

    <div class="card">
        <p class="subtitle">Complete el formulario</p>

        <form action="09.php" method="GET">
            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez García" required>
            </div>

            <div class="form-group">
                <label for="poblacion">Población</label>
                <input type="text" id="poblacion" name="poblacion" placeholder="Ej. Madrid" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" id="edad" name="edad" min="1" max="120" placeholder="Ej. 28" required>
            </div>

            <button type="submit" class="btn-submit" name="enviar">Enviar datos</button>
        </form>
    </div>

</html>