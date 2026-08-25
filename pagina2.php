<?php
$Nombre = $_REQUEST['nombre'];
$Edad = $_POST['edad'];

echo "Su nombre es: " . $Nombre . "<br>";

if (isset($Edad) and $Edad >= 18) {
    echo "Usted puede votar en las próximas elecciones 2028";
} else {
    echo "Usted no es mayor de edad";
}
?>