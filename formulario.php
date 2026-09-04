<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e293b; /* Fondo general azul oscuro/pizarra */
            color: #f8fafc;
            padding: 20px;
        }
        form {
            background-color: #0f172a; /* Fondo del formulario azul medianoche */
            padding: 18px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border: 1px solid #334155;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #e2e8f0;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px 0;
            box-sizing: border-box;
            border: 1px solid #475569;
            background-color: #1e293b;
            color: #ffffff;
            border-radius: 4px;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #06b6d4;
        }
        input[type="submit"] {
            background-color: #0891b2; /* Botón cian/turquesa */
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #0e7490; /* Hover más oscuro */
        }
        .resultado {
            margin-top: 15px;
            padding: 12px;
            background-color: #064e3b; /* Fondo verde esmeralda oscuro */
            border: 1px solid #059669;
            width: 295px;
            border-radius: 8px;
            color: #ecfdf5;
        }
        .error {
            margin-top: 15px;
            padding: 12px;
            background-color: #7f1d1d; /* Fondo rojo vino oscuro */
            border: 1px solid #dc2626;
            width: 295px;
            border-radius: 8px;
            color: #fef2f2;
        }
        .error ul {
            margin: 5px 0 0 20px;
            padding: 0;
        }
    </style>
</head>
<body>

    <h2>Formulario de entrada del dato</h2>

    <form method="post" action="">
        <label for="nombre">Ingrese su nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="edad">Ingrese su edad:</label>
        <input type="text" name="edad" id="edad">

        <input type="submit" value="Confirmar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Guardamos aquí los mensajes de error que vayamos encontrando
        $errores = [];

        // 1) Saneamiento del nombre: quitamos espacios sobrantes
        $nombre = trim($_POST['nombre'] ?? '');

        // 2) Validación del nombre: que no esté vacío y que sea texto
        if (empty($nombre) || !is_string($nombre)) {
            $errores[] = "El nombre no puede estar vacío.";
        }

        // 3) Saneamiento de la edad: quitamos espacios sobrantes
        $edadInput = trim($_POST['edad'] ?? '');

        // 4) Validación de la edad: debe ser un número entero válido
        $edad = filter_var($edadInput, FILTER_VALIDATE_INT);

        if ($edad === false || $edad < 0 || $edad > 120) {
            $errores[] = "La edad debe ser un número entero válido (0 a 120).";
        }

        // 5) Si hay errores, los mostramos; si no, mostramos el resultado
        if (!empty($errores)) {
            echo "<div class='error'>";
            echo "<strong>Se encontraron los siguientes errores:</strong>";
            echo "<ul>";
            foreach ($errores as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            }
            echo "</ul>";
            echo "</div>";
        } else {
            // mb_convert_case() con MB_CASE_TITLE pone en mayúscula la primera letra de cada palabra
            echo "<div class='resultado'>";
            echo "El nombre ingresado es: <strong>" . htmlspecialchars(mb_convert_case($nombre, MB_CASE_TITLE, 'UTF-8')) . "</strong><br>";
            echo "La edad ingresada es: <strong>" . htmlspecialchars($edad) . "</strong>";
            echo "</div>";
        }
    }
    ?>

</body>
</html>
