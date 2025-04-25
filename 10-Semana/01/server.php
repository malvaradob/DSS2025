<?php

class HolaMundo{
    public function saludar(){
        return "Hola, mundo desde SOAP en PHP!";
    }
}

$opciones =[
    'uri'=>'http://localhost/DSS2025/10-Semana/01/',
    'location'=>'http://localhost/DSS2025/10-Semana/01/server.php'
];

$server = new SoapServer(null,$opciones);
$server->setClass('HolaMundo');
$server->handle();

?>