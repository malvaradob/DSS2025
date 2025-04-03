<?php

final class ClaseFinal{

    public function sumar($valor1,$valor2){
        $sumar = $valor1 + $valor2;
        echo "La suma de {$valor1} + {$valor2} = {$sumar}";
    }
}

class OtraClase extends ClaseFinal{
    public function sumar($valor1,$valor2){
        $sumar = $valor1 + $valor2;
        echo "La suma de {$valor1} + {$valor2} = {$sumar}";
    }
}

$clase = new ClaseFinal();
$clase->sumar(10,5);

$otraClase = new OtraClase();
$otraClase->sumar(60,50);

?>