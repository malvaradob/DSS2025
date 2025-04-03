<?php


function autoCarga($nombreClase){
    // Convertir el nombre de la clase
    $archivo = $nombreClase.".php";

    if(file_exists($archivo)){
        include_once $archivo;
    }else{
        echo "La clase $nombreClase no se encuentra<br>";
    }
}

// Metodo megico de PHP
spl_autoload_register('autoCarga');


?>