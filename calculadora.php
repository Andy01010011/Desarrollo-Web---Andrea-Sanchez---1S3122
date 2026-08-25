<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora Básica</h2>

    <form method="post" action="calculadora.php">
        Número 1: <input type="text" name="num1"><br><br>
        Número 2: <input type="text" name="num2"><br><br>
        
        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Redondear Num 1">
    </form>

    <br>

    <?php
    if (isset($_REQUEST['operacion'])) {
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $operacion = $_REQUEST['operacion'];

        if ($operacion == "Sumar") {
            $resultado = $num1 + $num2;
            echo "La suma es: $resultado";
        } elseif ($operacion == "Restar") {
            $resultado = $num1 - $num2;
            echo "La resta es: $resultado";
        } elseif ($operacion == "Multiplicar") {
            $resultado = $num1 * $num2;
            echo "La multiplicación es: $resultado";
        } elseif ($operacion == "Redondear Num 1") {
            $resultado = round($num1);
            echo "El redondeo de $num1 es: $resultado";
        }
    }
    ?>
</body>
</html>