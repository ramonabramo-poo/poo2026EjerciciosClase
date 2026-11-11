<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08 - Formulario</title>
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

        .form-group {
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.88rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        .form-group input {
            padding: 12px 14px;
            border: 1.5px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.95rem;
            color: #1e293b;
            outline: none;
            transition: all 0.2s ease-in-out;
        }

        .form-group input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        .btn-submit {
            width: 100%;
            padding: 13px;
            margin-top: 10px;
            background-color: #2563eb;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .btn-submit:active {
            transform: scale(0.99);
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Registro de Usuario</h1>
        <p class="subtitle">Completa el formulario para enviar tus datos a 09.php</p>

        <form action="09.php" method="POST">
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
</body>

</html>