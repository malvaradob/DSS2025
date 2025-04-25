<?php

class Productos{

    private $productos = [];

    /*function __construct(){
        $this->productos =  [
            ['id'=>1,'nombre'=>'Producto 1','precio'=>5.5],
            ['id'=>2,'nombre'=>'Producto 2','precio'=>10.5],
            ['id'=>3,'nombre'=>'Producto 3','precio'=>15.5],
            ['id'=>4,'nombre'=>'Producto 4','precio'=>25.5],
            ['id'=>5,'nombre'=>'Producto 5','precio'=>35.5]
        ];

        
    }*/

    public function obtenerProductos(){
        return $this->productos;
    }

    public function agregarProducto($nombre,$precio){
        $id = count($this->productos) + 1;
        $newElemento =  ['id'=>$id,'nombre'=>$nombre,'precio'=>$precio];

        array_push($this->productos,$newElemento);

        return "Producto agregado: $nombre - Precio: $ $precio <br>";
    }
}


$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/03/',
    'location'=>'http://localhost/DSS2025/10-Semana/03/server.php'
];

$server = new SoapServer(null,$opciones);
$server->setClass('Productos');
$server->handle();

?>