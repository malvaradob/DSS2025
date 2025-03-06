<?php

// Ambito de una varible local
function variableLocal()
{
    $nombre = "Carlos Armando Alas";
    return $nombre;
}

$nombre = "Ricardo Ernesto Gutierrez";
echo "<br>Impresion de funcion variableLocal: " . variableLocal();

echo "<br>El valor de la variable nombre: $nombre";

// Variable de ambito global
$edad = 15;

function variableGlobal()
{
    global $edad; // Haciendo accesible la variable globa dentro de la funcion
    echo "<br>edad : $edad";
}

variableGLobal();

function variableGlobal2()
{
    echo "<br> Edad function 2 : " . $GLOBALS['edad'];
}

variableGlobal2();

// Variable de ambito estatico
function contador()
{
    /*for ($contador = 0; $contador < 3; $contador++) {
        echo "<br> Valor del contador : $contador";
    }*/
    static $contador = 0;
    $contador++;
    echo "<br> Valor del contador : $contador";
}

// Invocando por primera vez la funcion contador
contador(); // -> 1
// Una segunda invocacion o llamado
contador(); // -> 2
// Un tercer llamado
contador(); // -> 3
contador(); // -> 4
contador(); // -> 5


// Ambitos de los parametros de una funcion

function modificar($var)
{
    $var = 20; // Este es un valor dentro de la funcion
    echo "<br> valor de \$var = $var";
}

$x = 10;
modificar($x);
echo "<br> Valor de la variable \$x -> $x";


// Mantener el valor de la variable
function modificar2(&$var){
    $var = 20; // Este es un valor dentro de la funcion
    echo "<br> valor de \$var = $var";
}

$x = 100;
modificar2($x);
echo "<br> Valor de la variable \$x -> $x";


function parametroPorDefecto($nombre="PEPITO"){
    echo "<br>Nombre : $nombre";
}

parametroPorDefecto();
parametroPorDefecto(null);
parametroPorDefecto("JUAN");
?>