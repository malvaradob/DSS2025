<?php

$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/05/',
    'location'=>'http://localhost/DSS2025/10-Semana/05/server.php',
    'trace'=>1
];

$client = new SoapClient(null, $opciones);

$productos = $client->obtenerProductos();
foreach($productos as $producto){
    echo "ID: {$producto['id']} - Nombre: {$producto['nombre']} - Precio: $ {$producto['precio']}<br>";
}

?>