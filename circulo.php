<!DOCTYPE html>
<html>
<head>
    <title>Área y Perímetro de una Circunferencia</title>
</head>
<body>
    <h2>Cálculo del área y perímetro de un círculo</h2>

    <form method="post" action="circulo.php">
        Ingrese el radio: 
        <input type="text" name="radio">
        <input type="submit" value="Calcular">
    </form>

    <br>

    <?php
    if (isset($_REQUEST['radio'])) {
        $radio = $_REQUEST['radio'];
        define('PI', 3.1416);

        // Fórmulas
        $area = PI * ($radio ** 2);
        $perimetro = 2 * PI * $radio;

        // Resultados
        echo "Para un radio de <strong>$radio</strong>:<br>";
        echo "El área es: $area <br>";
        echo "El perímetro es: $perimetro";
    }
    ?>
</body>
</html>