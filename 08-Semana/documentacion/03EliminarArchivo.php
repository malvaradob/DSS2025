<?php

if(file_exists('archivo.txt')){

    echo "El archivo existe<br>";

    $tamano = filesize('archivo.txt');
    echo "El tamaño del archivo es: $tamano bytes<br>";

    $fechaModificacion = filemtime('archivo.txt');
    echo "El archivo fue modificado por ultima vez el: ".date("d-m-Y H:i:s",$fechaModificacion)."<br>";

    if(unlink('archivo.txt')){
        echo "Archivo eliminado exitosamente";
    }else{
        echo "No se pudo eliminar el archivo";
    }
}else{
    echo "El archivo no existe. No se puede eliminar";
}

?>