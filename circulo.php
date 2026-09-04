<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro de un Círculo</title>
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
    <h2>Área y perímetro de un círculo</h2>

    <!-- Formulario para ingresar el radio -->
    <form method="post" action="">
        <label for="radio">Ingrese el radio del círculo:</label>
        <input type="number" step="any" id="radio" name="radio" required min="0.01">
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Se ejecuta solo cuando el formulario se envía por POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // 1) Saneamiento
        $radioInput = trim($_POST['radio'] ?? '');

        // 2) Validación: comprobamos que sea un número
        $radio = filter_var($radioInput, FILTER_VALIDATE_FLOAT);

        if ($radio === false || $radio <= 0) {
            $valorMostrado = htmlspecialchars($radioInput, ENT_QUOTES, 'UTF-8');
            echo "<div class='error'>";
            echo "El valor ingresado (\"$valorMostrado\") no es un radio válido. ";
            echo "Debe ser un número mayor que 0.";
            echo "</div>";
        } else {
            // Definimos PI como constante
            define("PI_VALOR", 3.14159265359);

            // Fórmulas de área y perímetro
            $area = PI_VALOR * ($radio ** 2);
            $perimetro = 2 * PI_VALOR * $radio;

            echo "<div class='resultado'>";
            echo "<strong>Resultados para un radio de " . htmlspecialchars($radio) . ":</strong><br>";
            echo "Área = " . round($area, 2) . "<br>";
            echo "Perímetro = " . round($perimetro, 2);
            echo "</div>";
        }
    }
    ?>
</body>
</html>
