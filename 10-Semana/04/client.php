<?php

$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/04/',
    'location'=>'http://localhost/DSS2025/10-Semana/04/servidor.php',
    'trace'=>1
];

$client = new SoapClient(null, $opciones);

// Enviando el nombre del archivo
$respuesta = $client->recibirArchivo("ejemplo.txt","Un mensaje escrito desde SOAP");
echo $respuesta ."<br>";

// Obtener la informacion del archivo
$contenido = $client->obtenerArchivo("ejemplo.txt");
echo "Contenido del archivo: ejemplo.txt <pre>$contenido</pre>";


?>