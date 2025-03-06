<?php

// Factorial
// Numero 2!
// 1 x 1 x 2
function factorial($numero)
{
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $factorial * $i;
    }
    return $factorial;
}

// Invocando a la funcion factorial
$numero = 6;
$respuesta = factorial($numero);
echo "Factorial de $numero! = $respuesta";


// Funciones con argumentos varaibles
function suma(...$numeros)
{
    $total = 0;
    foreach ($numeros as $numero) {
        $total += $numero;
    }

    echo "<br>La suma es: $total";
}

suma(10, 5, 6, 7);
suma(10, 1);


// Funciones recursivas
function factorial2($num)
{
    // Condicion de finalizacion
    if ($num == 1) {
        return $num;
    }
    return $num * factorial2(num: $num - 1);
}

$num = 3;
$respuesta = factorial2($num);
echo "<br>Factorial de $num! = $respuesta";

?>