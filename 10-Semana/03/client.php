<?php

$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/03/',
    'location'=>'http://localhost/DSS2025/10-Semana/03/server.php',
    'trace'=>1
];

$client = new SoapClient(null,$opciones);

echo $client->agregarProducto('Manzanas','0.70');


$productos = $client->obtenerProductos();
foreach($productos as $producto){
    echo "ID: {$producto['id']} - Nombre: {$producto['nombre']} - Precio: $ {$producto['precio']}<br>";
}

?>