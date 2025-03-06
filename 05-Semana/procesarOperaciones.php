<?php

$opcion = isset($_POST["opcion"]) ? $_POST["opcion"] : 0;
$numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] : "";
$numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : "";

//Validaciones de datos

if ($opcion != 0 && !empty($numero1) && !empty($numero2)) {

    $respuesta;
    $label;

    switch ($opcion) {
        case 1:
            $respuesta = sumar($numero1, $numero2);
            $label = "La suma de $numero1 + $numero2 = $respuesta";
            break;
        case 2:
            $respuesta = restar($numero1, $numero2);
            $label = "La resta de $numero1 - $numero2 = $respuesta";
            break;

        case 3:
            $respuesta = multiplicar($numero1, $numero2);
            $label = "La multiplicacion de $numero1 x $numero2 = $respuesta";
            break;

        case 4:
            $respuesta = dividir($numero1, $numero2);
            if ($respuesta > 0) {
                $label = "La division de $numero1 / $numero2 = $respuesta";
            } else {
                $label = "Error: No se puede realizar una division entre cero";
            }
            break;
    }

    echo "<h1>$label</h1>";

} else {
    echo "<h1>FALTAN DATOS REQUERIDOS</h1>";
}



// Definicion de funciones
function sumar($num1, $num2)
{
    return $num1 + $num2;
}

function restar($num1, $num2)
{
    return $num1 - $num2;
}

function multiplicar($num1, $num2)
{
    return $num1 * $num2;
}


function dividir($num1, $num2)
{
    if ($num2 == 0) {
        return -1;
    } else {
        return $num1 / $num2;
    }
}
?>