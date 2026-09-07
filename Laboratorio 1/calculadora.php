<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Calculadora</title>
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
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px 0;
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
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #0e7490; /* Hover más oscuro */
        }
        .resultado {
            margin-top: 20px;
            padding: 15px;
            background-color: #0f172a; /* Tarjeta contenedora de resultados */
            border: 1px solid #334155;
            width: 315px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        .item-operacion {
            background-color: #1e293b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 10px;
            border-left: 4px solid #06b6d4; /* Detalle de color cian */
        }
        .item-operacion:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <h2>Calculadora PHP</h2>

    <form method="post" action="">
        <label for="num1">Ingrese el primer número:</label>
        <input type="number" step="any" id="num1" name="num1" required>

        <label for="num2">Ingrese el segundo número:</label>
        <input type="number" step="any" id="num2" name="num2" required>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];

        // Operaciones
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;

        echo "<div class='resultado'>";
        echo "<h3 style='margin-top: 0; color: #06b6d4;'>Resultados:</h3>";
        
        // Suma
        echo "<div class='item-operacion'>";
        echo "<strong>Suma:</strong> $suma <br>";
        echo "<strong>Suma redondeada:</strong> " . round($suma);
        echo "</div>";

        // Resta
        echo "<div class='item-operacion'>";
        echo "<strong>Resta:</strong> $resta <br>";
        echo "<strong>Resta redondeada:</strong> " . round($resta);
        echo "</div>";

        // Multiplicación
        echo "<div class='item-operacion'>";
        echo "<strong>Multiplicación:</strong> $multiplicacion <br>";
        echo "<strong>Multiplicación redondeada:</strong> " . round($multiplicacion);
        echo "</div>";

        echo "</div>";
    }
    ?>

</body>
</html>