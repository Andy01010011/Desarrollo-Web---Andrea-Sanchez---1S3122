<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Pulgadas a Centímetros</title>
</head>
<body>
    <h2>Conversor de Pulgadas a Centímetros</h2>

    <form method="post" action="conversor.php">
        Ingrese la cantidad en pulgadas: 
        <input type="text" name="pulgadas">
        <input type="submit" value="Convertir">
    </form>

    <br>

    <?php
    if (isset($_REQUEST['pulgadas'])) {
        $pulgadas = $_REQUEST['pulgadas'];
        $factor_conversion = 2.54;

        // Operación
        $centimetros = $pulgadas * $factor_conversion;

        // Resultado
        echo "<strong>$pulgadas</strong> pulgadas equivalen a <strong>$centimetros</strong> cm.";
    }
    ?>
</body>
</html>