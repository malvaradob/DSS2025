<?php

// Aignacion directa al momento de crear un arreglo
$paises[0] = "El Salvador";
$paises[1] = "Honduras";
$paises[2] = "Guatemala";

echo "<pre>";
print_r($paises);
echo "</pre>";

// count = 3
// $i = 0 < count = 3
// $i = 1 < count = 3
// $i = 2 < count = 3
// $i = 3 < count = 3
for ($i = 0; $i < count($paises); $i++) {
    echo "paises[{$i}] = " . $paises[$i] . "<br>";
}


echo "<hr>";

// Utilizar el constructor de array
$nombre = array("Juan", "Pedro", 10, 50.55, "Ricardo");
echo "<pre>";
print_r($nombre);
echo "</pre>";

echo "<hr>";

$nombre = array();
$nombre[] = "Ana";
$nombre[] = "Rosa";
$nombre[] = "Alejandra";
echo "<pre>";
print_r($nombre);
echo "</pre>";

echo "<hr>";

$nombre = array();
$nombre[2] = "Ana";
$nombre[1] = "Rosa";
$nombre[0] = "Alejandra";
echo "<pre>";
print_r($nombre);
echo "</pre>";

echo "<hr>";

// Definicion de arreglos asociativos
$animales = array(
    "Gato" => "Felino",
    "Persona" => "Masculino",
    "Pato" => "Ave"
);
echo "<pre>";
print_r($animales);
echo "</pre>";
/*
// ESTO INCORRECTO
for ($i = 0; $i < count($animales); $i++) {
    echo "animales[{$i}] = " . $animales[$i] . "<br>";
}*/

// LO QUE SI CORRECTO
foreach ($animales as $indice => $valor):
    echo "animales[{$indice}] = " . $valor . "<br>";
endforeach;

echo "<hr>";

// arreglo de dos dimensiones
$alumnos = array(
    1 => array("Tomas", 23, "Masculino", "Computacion"),
    2 => array("Ruth", 19, "Femenino", "Comunicaciones"),
    3 => array("Rene", 25, "Masculino", "Comercio"),
    4 => array("Rosa", 24, "Femenino", "Contaduria")
);

echo "<pre>";
print_r($alumnos);
echo "</pre>";


echo "<h1>Funciones basicas para el manejo de arreglos o matrices</h1>";
$arreglo = array("Toyota", "Nissan", "Kia", "Honda");

echo "<br>Tamaño del arreglo COUNT -> " . count($arreglo);
echo "<br>Tamaño del arreglo SIZEOF -> " . sizeof($arreglo);
$pepito = 10;
// Verifica que un arreglo exista
if (is_array($pepito)) {
    echo "<br>La variable \$arreglo si <b>es un ARREGLO</b>";
} else {
    echo "<br>La variable \$arreglo <b>NO un ARREGLO</b>";
}

// Verificar si una indice existe
$arreglo = array("t" => "Toyota", "n" => "Nissan", "k" => "Kia", "h" => "Honda");
echo "<br> Respuesta: ".array_key_exists("z", $arreglo);
?>