<?php

// Debo de encapsular el codigo por medio de un try catch

try{
    // Realizando una operacion que cause error
    $dividir = 10;
    $divisor = 0;

    if($divisor == 0){
        throw new Exception("No se puede dividir por cero");
    }

    $resultado = $dividir / $divisor;
    echo "Resultado: {$resultado}";

}catch(Exception $e){
    echo "Excepcion captura: ".$e->getMessage()."<br>";
}finally{
    echo "Este bloque se ejecuta siempre, sin importar si hubo excepciones<br>";
}

?>