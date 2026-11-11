<?php
// Comprobar si se ha pulsado el botón de enviar
if (!isset($_POST['enviar'])) {
    // Reenviar a 08.php si se accede directamente sin pulsar el botón
    header('Location: 08.php');
    exit;
}

// Recogemos los datos directamente sin sanear
$nombre = $_POST['nombre'];
$poblacion = $_POST['poblacion'];
$edad = $_POST['edad'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09 - Datos Recibidos</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 440px;
            padding: 35px 30px;
        }

        .card h1 {
            color: #1e293b;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 8px;
            text-align: center;
        }

        .card p.subtitle {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 25px;
            text-align: center;
        }

        .data-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 25px;
        }

        .data-list li {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .data-list .label {
            font-weight: 600;
            color: #475569;
            font-size: 0.9rem;
        }

        .data-list .value {
            font-weight: 700;
            color: #1e293b;
            font-size: 1rem;
        }

        .btn-back {
            display: block;
            text-align: center;
            text-decoration: none;
            width: 100%;
            padding: 12px;
            background-color: #f1f5f9;
            color: #334155;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background-color: #e2e8f0;
            color: #0f172a;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Datos Recibidos</h1>
        <p class="subtitle">Información procesada desde el formulario 08.php</p>

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
