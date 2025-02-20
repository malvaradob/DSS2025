<?php

$fila = 1;
do {
    
    // Incremento
    $fila++;

    if ($fila == 2) {
        //break; // Interruccion de nuestro, FINALIZA
        continue; // Saltarse una iteracion
    }

    echo "<br>Fila = {$fila}";
}
while ($fila <= 10);




?>