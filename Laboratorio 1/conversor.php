<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Pulgadas a Centímetros</title>

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
            color: #e2e8f0;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0 12px 0;
            box-sizing: border-box;
            border: 1px solid #475569;
            background-color: #1e293b;
            color: #ffffff;
            border-radius: 4px;
        }
        input[type="number"]:focus {
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
        /* Estilo para mostrar errores de validación */
        .error {
            margin-top: 15px;
            padding: 12px;
            background-color: #7f1d1d; /* Fondo rojo vino oscuro */
            border: 1px solid #dc2626;
            width: 295px;
            border-radius: 8px;
            color: #fef2f2;
        }
    </style>
</head>
<body>

    <h2>Conversión de Pulgadas a Centímetros</h2>

    <!-- Formulario -->
    <form method="post" action="">
        <label for="pulgadas">Ingrese las pulgadas:</label>
        <input type="number" step="any" id="pulgadas" name="pulgadas" required min="0">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Procesamiento en PHP, solo si el formulario se envió por POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Constante del factor de conversión
        define("CM_POR_PULGADA", 2.54);

        // 1) Saneamiento: quitamos espacios en blanco sobrantes antes de validar
        $pulgadasInput = trim($_POST['pulgadas'] ?? '');

        // 2) Validación: comprobamos que realmente sea un número
        $pulgadas = filter_var($pulgadasInput, FILTER_VALIDATE_FLOAT);

        // Las pulgadas deben ser un número y no negativas
        if ($pulgadas === false || $pulgadas < 0) {
            
            // htmlspecialchars para evitar inyecciones XSS
            $valorMostrado = htmlspecialchars($pulgadasInput, ENT_QUOTES, 'UTF-8');
            echo "<div class='error'>";
            echo "El valor ingresado (\"$valorMostrado\") no es válido. ";
            echo "Debe ser un número mayor o igual a 0.";
            echo "</div>";
        } else {
            // Cálculo
            $centimetros = $pulgadas * CM_POR_PULGADA;

            // Resultado
            echo "<div class='resultado'>";
            echo "<strong>Resultado:</strong><br>";
            echo htmlspecialchars($pulgadas) . " pulgadas equivalen a " . round($centimetros, 2) . " cm";
            echo "</div>";
        }
    }
    ?>

</body>
</html>