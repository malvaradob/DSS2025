<?php

$opciones =[
    'uri'=>'http://localhost/DSS2025/10-Semana/01/',
    'location'=>'http://localhost/DSS2025/10-Semana/01/server.php',
    'trace'=>1
];

$client = new SoapClient(null,$opciones);
echo $client->saludar();

?>