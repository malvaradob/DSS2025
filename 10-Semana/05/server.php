<?php
require 'db.php';

class Producto{
    public $id;
    public $nombre;
    public $precio;
}


class CRUDProducto{

    public function obtenerProductos(){
        $db = getDB();
        $query = "SELECT * FROM productos";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}


$opciones =[
    'uri' =>'http://localhost/DSS2025/10-Semana/05/',
    'location'=>'http://localhost/DSS2025/10-Semana/05/server.php'
];

$server = new SoapServer(null, $opciones);
$server->setClass('CRUDProducto');
$server->handle();

?>