<?php

$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/02/',
    'location'=>'http://localhost/DSS2025/10-Semana/02/server.php',
    'trace'=>1
];


$client = new SoapClient(null,$opciones);

// Llamando a los metodos respectivos
$num1 = 20;
$num2 = 10;
$suma = $client->sumar($num1,$num2);
echo "<br> La suma de $num1 + $num2 = $suma";

$resta = $client->restar($num1,$num2);
echo "<br> La resta de $num1 - $num2 = $resta";

$multiplicar = $client->multiplicar($num1,$num2);
echo "<br> La multiplicacion de $num1 x $num2 = $multiplicar";

$dividir = $client->dividir($num1,$num2);
echo "<br> La division de $num1 / $num2 = $dividir";

?>