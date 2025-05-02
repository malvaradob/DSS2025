<?php

require_once "../config/database.php";

class Product
{

    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM products WHERE id = ?");        
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name,$price){
        $stmt = $this->conn->prepare("INSERT INTO products (name,price) VALUES(?,?)");
        return $stmt->execute([$name,$price]);
    }

    public function update($id,$name,$price){
        $stmt = $this->conn->prepare("UPDATE products SET name = ?,price=? WHERE id=?");
        return $stmt->execute([$name,$price,$id]);
    
    }

    public function delete($id){
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id=?");
        return $stmt->execute([$id]);
    
    }

}

?>