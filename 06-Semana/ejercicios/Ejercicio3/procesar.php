<?php
// Definicion de un arreglo 
$palabras_buscar = [
    "PHP",
    "JAVA",
    "SQL",
    "Base de Datos",
    "Programacion",
    "HTML",
    "Servidor Web"
];

// La captura de la informacion
$texto = isset($_POST["texto"]) ? $_POST["texto"] : "";

// Definir una funcion que evalue el texto
function encontraCoicidencias($texto, $palabras)
{
    // Definiendo el patron de coicidencias
    $patron = "/\b" . preg_quote($palabras, '/') . "\b/i";
    preg_match_all($patron, $texto, $coicidencias);

    return count($coicidencias[0]);
}

echo "<h2>Resultados a mostrar</h2>";

echo "<p>$texto</p>";
foreach($palabras_buscar as $palabras){
    $coincidencia = encontraCoicidencias($texto,$palabras);
    echo "<p>$palabras : $coincidencia coincidencias encontradas</p>";

}


?>