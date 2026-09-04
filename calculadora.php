<?php
echo "Operaciones Matematicas<br>";
echo "Suma<br>";
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;

echo "La suma de $num1 y $num2 es: $suma<br>"; // La suma de 4 y 7 es: 11

echo "Resta<br>";
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;

echo "La resta de $num1 y $num2 es: $resta<br>"; // La resta de 10 y 3 es: 7

echo "multiplicacion<br>";
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;

echo "La multiplicación de $num1 y $num2 es: $multiplicacion<br>"; // La multiplicación de 5 y 6 es: 30

echo "division<br>";
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;

echo "La división de $num1 y $num2 es: $division<br>"; // La división de 20 y 4 es: 5

echo "modulo<br>";
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;

echo "El módulo de $num1 y $num2 es: $modulo<br>"; // El módulo de 15 y 4 es: 3

echo "potencia<br>";
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;

echo "La potencia de $base elevado a $exponente es: $potencia<br>"; // La potencia de 2 elevado a 3 es: 8

echo "redondeo<br>";
$numero = 4.6;

$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);

echo "El número redondeado es: $redondeado<br>"; // El número redondeado es: 5
echo "El número redondeado hacia arriba es: $redondeado_arriba<br>"; // El número redondeado hacia arriba es: 5
echo "El número redondeado hacia abajo es: $redondeado_abajo<br>"; // El número redondeado hacia abajo es: 4

echo "ejemplos de modulo<br>";
echo (5 % 3)."\n";        // muestra 2
echo (5 % -3)."\n";       // muestra 2
echo (-5 % 3)."\n";       // muestra -2
echo (-5 % -3)."\n";      // muestra -2

echo "Valor Absoluto<br>";
$numero = -7;
$valor_absoluto = abs($numero);

echo "El valor absoluto de $numero es: $valor_absoluto"; // El valor absoluto de -7 es: 7

?>
