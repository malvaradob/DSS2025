<?php

class Archivo{
    public function recibirArchivo($nombreArchivo,$contenido){
        file_put_contents($nombreArchivo,$contenido);
        return "Archivo $nombreArchivo guardado con exito";
    }

    public function obtenerArchivo($nombreArchivo){
        if(file_exists($nombreArchivo)){    
            return file_get_contents($nombreArchivo);
        }else{
            throw new SoapFault("Server","El archivo no existe");
        }
    }
}


$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/04/',
    'location'=>'http://localhost/DSS2025/10-Semana/04/servidor.php'
];

$server = new SoapServer(null, $opciones);
$server->setClass('Archivo');
$server->handle();
?>