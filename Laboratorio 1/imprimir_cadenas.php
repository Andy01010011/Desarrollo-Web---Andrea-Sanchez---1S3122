<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprimir Cadenas en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e293b; /* Fondo general azul oscuro/pizarra */
            color: #f8fafc;
            padding: 20px;
        }
        .contenedor {
            background-color: #0f172a; /* Fondo azul medianoche */
            padding: 20px;
            border-radius: 8px;
            width: 380px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            border: 1px solid #334155;
        }
        h1 {
            font-size: 22px;
            color: #06b6d4; /* Color cian */
            margin-top: 0;
            border-bottom: 2px solid #334155;
            padding-bottom: 10px;
        }
        p {
            color: #94a3b8;
            font-size: 0.95em;
        }
        .resultado {
            margin-top: 15px;
            padding: 12px;
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 6px;
            line-height: 1.8;
            border-left: 4px solid #0891b2; /* Detalle cian */
        }
        .resultado strong {
            display: inline-block;
            width: 180px;
            color: #38bdf8; /* Azul claro para las etiquetas */
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Ejemplo simple</h1>
        <p>Primer ejemplo de código PHP embebido dentro de código HTML.</p>

        <?php
        // Cadena original
        $cadena = "   hola Mundo desde PHP   ";

        // trim() elimina los espacios en blanco al inicio y al final
        $sinEspacios = trim($cadena);

        // ucfirst() convierte el primer caracter a mayúscula
        $primeraMayuscula = ucfirst($sinEspacios);

        // strtoupper() convierte toda la cadena a mayúsculas
        $mayusculas = strtoupper($sinEspacios);

        // strtolower() convierte toda la cadena a minúsculas
        $minusculas = strtolower($sinEspacios);

        // strlen() cuenta la cantidad de caracteres de la cadena
        $longitud = strlen($sinEspacios);

        // htmlspecialchars() protege la salida por si la cadena
        // llegara a contener caracteres HTML especiales
        echo "<div class='resultado'>";
        echo "<strong>Original:</strong> \"" . htmlspecialchars($cadena) . "\"<br>";
        echo "<strong>Sin espacios (trim):</strong> \"" . htmlspecialchars($sinEspacios) . "\"<br>";
        echo "<strong>Primera en mayúscula:</strong> " . htmlspecialchars($primeraMayuscula) . "<br>";
        echo "<strong>Todo en mayúsculas:</strong> " . htmlspecialchars($mayusculas) . "<br>";
        echo "<strong>Todo en minúsculas:</strong> " . htmlspecialchars($minusculas) . "<br>";
        echo "<strong>Longitud (strlen):</strong> " . $longitud . " caracteres<br>";
        echo "<strong>Saludo final:</strong> Hola Mundo";
        echo "</div>";
        ?>
    </div>
</body>
</html>