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
            width: 320px;
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
            width: 315px;
            border-radius: 8px;
            color: #ecfdf5;
        }
        .error {
            margin-top: 15px;
            padding: 12px;
            background-color: #7f1d1d; /* Fondo rojo vino oscuro */
            border: 1px solid #dc2626;
            width: 315px;
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

        $errores = [];

        // 1) Captura y saneamiento
        $Nombre = trim($_REQUEST['nombre'] ?? '');
        $EdadInput = trim($_POST['edad'] ?? '');

        // 2) Validaciones
        if (empty($Nombre) || !is_string($Nombre)) {
            $errores[] = "El nombre no puede estar vacío.";
        }

        $Edad = filter_var($EdadInput, FILTER_VALIDATE_INT);

        if ($Edad === false || $Edad < 0 || $Edad > 120) {
            $errores[] = "La edad debe ser un número entero válido (0 a 120).";
        }

        // 3) Impresión de resultados
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
            // Aplicamos mb_convert_case con MB_CASE_TITLE para formatear iniciales de nombres y apellidos
            $nombreFormateado = mb_convert_case($Nombre, MB_CASE_TITLE, 'UTF-8');

            echo "<div class='resultado'>";
            echo "Su nombre es: <strong>" . htmlspecialchars($nombreFormateado) . "</strong><br><br>";

            // Lógica condicional original
            if (isset($Edad) and $Edad >= 18) {
                echo "Usted puede votar en las próximas elecciones 2028";
            } else {
                echo "Usted no es mayor de edad";
            }
            echo "</div>";
        }
    }
    ?>

</body>
</html>