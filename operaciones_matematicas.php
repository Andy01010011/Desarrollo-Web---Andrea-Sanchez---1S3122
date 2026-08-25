<?php
echo "<h2>1) Suma</h2>";
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma<br><br>";

echo "<h2>2) Resta</h2>";
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta<br><br>";

echo "<h2>3) Multiplicación</h2>";
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicación de $num1 y $num2 es: $multiplicacion<br><br>";

echo "<h2>4) División</h2>";
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La división de $num1 y $num2 es: $division<br><br>";

echo "<h2>5) Módulo</h2>";
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo<br><br>";

echo "<h2>6) Potenciación</h2>";
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia<br><br>";

echo "<h2>Redondeo:</h2>";
$numero = 4.6;
$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);
echo "El número redondeado es: $numero<br>";
echo "El número redondeado hacia arriba es: $redondeado_arriba<br>";
echo "El número redondeado hacia abajo es: $redondeado_abajo<br><br>";

echo "<h2>Signos en el Operador Módulo %</h2>";
echo (5 % 3) . "<br>";
echo (5 % -3) . "<br>";
echo (-5 % 3) . "<br>";
echo (-5 % -3) . "<br><br>";

echo "<h2>Valor Absoluto</h2>";
$numero = -7;
$valor_absoluto = abs($numero);
echo "El valor absoluto de $numero es: $valor_absoluto<br>";
?>