<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Definicion del arreglo
$nombres = array();

$indice = 0;
foreach ($_POST as $value) {
    $nombres[$indice] = $value;
    $indice++;
}

echo "<pre>";
print_r($nombres);
echo "</pre>";


$nombres = array();
foreach ($_POST as $value) {
    $nombres[] = $value;
}
echo "<pre>";
print_r($nombres);
echo "</pre>";
?>