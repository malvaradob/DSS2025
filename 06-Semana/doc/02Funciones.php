<?php

$cadena = "100 HOLA MUNDO 2025 99 ";
echo "<h5>$cadena</h5>";
$patron = "/\d+/";

if (preg_match($patron, $cadena)) {
    echo "<br>Se encontro un numero de coiciencias dentro de la cadena";
} else {
    echo "<br>No se encontro ningun numero";
}


preg_match_all($patron, $cadena, $coicidencias);
echo "<br>Numero de coicidencias: ";
print_r($coicidencias);



$cadenaReemplazada = preg_replace($patron, "Z", $cadena);
echo "<br>" . $cadenaReemplazada;

$cadena = "ricardo-rene-ana-rivas-raul";
$patron = "/-/";
$array = preg_split($patron, $cadena);
echo "<h5>$cadena</h5>";
print_r($array);


$cadena = "Quiero vender 2 manzanas al precio de 3";
$patron ="/\d+/";

$cadenaReemplazada = preg_replace_callback($patron,function($coicidencias){
    return $coicidencias[0] + 10 ;
}, $cadena);

echo "<h5>$cadena</h5>";
echo "<br>$cadenaReemplazada";

?>