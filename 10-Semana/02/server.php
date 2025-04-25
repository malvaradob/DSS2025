<?php

class Calculadora{
    public function sumar($num1,$num2){
        return $num1 + $num2;
    }

    public function restar($num1,$num2){
        return $num1 - $num2;
    }

    public function multiplicar($num1,$num2){
        return $num1 * $num2;
    }

    public function dividir($num1,$num2){
        return $num1 / $num2;
    }
}


$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/02/',
    'location'=>'http://localhost/DSS2025/10-Semana/02/server.php'
];

$server = new SoapServer(null,$opciones);
$server->setClass('Calculadora');
$server->handle();
?>