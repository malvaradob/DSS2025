<?php

// Uso de While 
$fila = 1;
        //5
while ($fila <= 10) {

    //$fila = $fila + 1;
    //$fila += 1;

    // Romper el ciclo
    /*if ($fila == 5)
        break;*/

    if ($fila == 5){
        $fila++;
        continue;
    }
        

    echo "<br>Fila : $fila";


    // Variable de incremento
    $fila++;


}

?>