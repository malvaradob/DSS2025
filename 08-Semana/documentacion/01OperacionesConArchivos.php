<?php

/*
    r -> modo solo lectura (el puntero del archivo esta al principio)
    w -> modo escritura (si el archivo no existe, se crea y si existe se borra)
    a -> modo escritura (si el archivo no existe, se crea y si existe, se abre y se agrega al final la nueva linea)
    r+ -> lectura y escritura (el puntero al principio)
    w+ -> lectura y escritura (si el archivo no existe, se crea y si el archivo existe se borra)
    a+ -> lectura y escritura (si el archivo no existe, se crea y si existe, se abre y se agrega al final la nueva linea)
*/

$archivo = fopen('archivo.txt', 'r');
if ($archivo) {
    echo "Archivo abierto con exito";
} else {
    echo "No se puede abrir el archivo";
}

fclose($archivo);

echo "<hr>";

// Es una lectura completa del archivo
$contenido = file_get_contents('archivo.txt');
echo $contenido;

echo "<hr>";
// Leer el archivo linea por linea utilizando fgets()
$archivo = fopen('archivo.txt', 'r');
while (($linea = fgets($archivo)) != false) {
    echo $linea . "<br>";
}
fclose($archivo);

echo "<hr>";
// Leer un archivo por bloques con fread()
$file = fopen('archivo.txt','r');
$content = fread($file, filesize('archivo.txt'));
echo $content;
fclose($file);

?>