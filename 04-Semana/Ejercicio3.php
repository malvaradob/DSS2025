<?php
/*
De una serie de números del 1 al 20, solicite al usuario 
cual de ellos no deberá de ser impreso en pantalla
*/

// Definir variables de entrada
$dato = $_POST["dato"]; // El valor que se debe capturar de un formulario

// Proceso a desarrollar

/*for ($a = 1; $a <= 20; $a++) {

    if ($a == $dato) {
        continue;
    }

    // Realizar la impresion de los numeros
    // Impresion de variables de salida
    echo "<h3>{$a}</h3>";
}*/

// While
$incremento = 1;

echo "<ul>";


while ($incremento <= 20):
        //8 -> 8
    if ($dato == $incremento){
        $incremento++;
        continue;
        //echo "<h1>{$dato} - {$incremento}</h1>";
    }
        
    echo "<li>{$incremento}</li>";

    $incremento++;
endwhile;
echo "</ul>";
?>