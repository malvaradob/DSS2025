<?php

class Database{

private  $host = "localhost";
private $db_name="mvc";
private $username="root";
private $password="123456";

public $conn;

public function connect(){
    $this->conn = null;

    try{
        $this->conn = new PDO(
            "mysql:host={$this->host};dbname={$this->db_name}",
            $this->username,
            $this->password
            );

            $this->conn->exec("set names utf8");
    }catch(PDOException $e){
        die("La conexion a la base de datos no es posible. ".$e->getMessage());
    }
    return $this->conn;
}
}
?>