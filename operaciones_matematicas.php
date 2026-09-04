<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operaciones Matemáticas Básicas en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e293b; /* Fondo general azul oscuro/pizarra */
            color: #f8fafc;
            padding: 20px;
        }
        .contenedor {
            max-width: 500px;
            background-color: #0f172a; /* Fondo azul medianoche */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border: 1px solid #334155;
        }
        h2 {
            color: #06b6d4; /* Color cian */
            margin-top: 0;
            border-bottom: 2px solid #334155;
            padding-bottom: 10px;
        }
        .tarjeta-operacion {
            background-color: #1e293b;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 15px; /* Espacio de separación entre operaciones */
            border-left: 4px solid #0891b2; /* Borde decorativo cian */
        }
        .tarjeta-operacion:last-child {
            margin-bottom: 0;
        }
        .titulo-operacion {
            font-weight: bold;
            color: #38bdf8;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-size: 0.9em;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Operaciones Matemáticas</h2>

    <?php
    // 1. Suma
    $num1 = 4;
    $num2 = 7;
    $suma = $num1 + $num2;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Suma</div>";
    echo "La suma de $num1 y $num2 es: <strong>$suma</strong>";
    echo "</div>";

    // 2. Resta
    $num1 = 10;
    $num2 = 3;
    $resta = $num1 - $num2;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Resta</div>";
    echo "La resta de $num1 y $num2 es: <strong>$resta</strong>";
    echo "</div>";

    // 3. Multiplicación
    $num1 = 5;
    $num2 = 6;
    $multiplicacion = $num1 * $num2;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Multiplicación</div>";
    echo "La multiplicación de $num1 y $num2 es: <strong>$multiplicacion</strong>";
    echo "</div>";

    // 4. División
    $num1 = 20;
    $num2 = 4;
    $division = $num1 / $num2;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>División</div>";
    echo "La división de $num1 y $num2 es: <strong>$division</strong>";
    echo "</div>";

    // 5. Módulo
    $num1 = 15;
    $num2 = 4;
    $modulo = $num1 % $num2;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Módulo</div>";
    echo "El módulo de $num1 y $num2 es: <strong>$modulo</strong>";
    echo "</div>";

    // 6. Potenciación
    $base = 2;
    $exponente = 3;
    $potencia = $base ** $exponente;
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Potencia</div>";
    echo "La potencia de $base elevado a $exponente es: <strong>$potencia</strong>";
    echo "</div>";

    // 7. Redondeo
    $numero = 4.6;
    $redondeado = round($numero);
    $redondeado_arriba = ceil($numero);
    $redondeado_abajo = floor($numero);
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Redondeo (Número: $numero)</div>";
    echo "Redondeado estándar: <strong>$redondeado</strong><br>";
    echo "Redondeado hacia arriba (ceil): <strong>$redondeado_arriba</strong><br>";
    echo "Redondeado hacia abajo (floor): <strong>$redondeado_abajo</strong>";
    echo "</div>";

    // 8. Ejemplos de Módulo con Signos
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Ejemplos de Módulo con Signos</div>";
    echo "(5 % 3) = <strong>" . (5 % 3) . "</strong><br>";
    echo "(5 % -3) = <strong>" . (5 % -3) . "</strong><br>";
    echo "(-5 % 3) = <strong>" . (-5 % 3) . "</strong><br>";
    echo "(-5 % -3) = <strong>" . (-5 % -3) . "</strong>";
    echo "</div>";

    // 9. Valor Absoluto
    $numero_abs = -7;
    $valor_absoluto = abs($numero_abs);
    echo "<div class='tarjeta-operacion'>";
    echo "<div class='titulo-operacion'>Valor Absoluto</div>";
    echo "El valor absoluto de $numero_abs es: <strong>$valor_absoluto</strong>";
    echo "</div>";
    ?>

</div>

</body>
</html>
