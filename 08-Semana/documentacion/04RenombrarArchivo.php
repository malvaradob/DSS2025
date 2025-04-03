<?php

function renombrar(){
    if(file_exists('archivo.txt')){

        // Renombre del archivo
    if(rename('archivo.txt','updateArchivo.txt')){
        echo "El archivo ha sido renombrado con exito <br>";
    }else{
        echo "No se pudo renombrar el archivo";
    }
    
    }else{
        echo "El archivo no existe y no podra ser renombrado";
    }
}

function mover(){
    if(file_exists('archivo.txt')){

        // Renombre del archivo
    if(rename('archivo.txt','contenido/archivo.txt')){
        echo "El archivo ha sido movido con exito <br>";
    }else{
        echo "No se podido mover el archivo";
    }    
    }else{
        echo "El archivo no existe y no podra ser movido";
    }
}

// Llamando a nuestra funcion mover
mover();

?>