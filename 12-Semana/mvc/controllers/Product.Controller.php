<?php 

require_once '../models/Product.php';


class ProductController{

    public function index(){
        $product = new Product();
        $products = $product->getAll();
        require '../views/product/index.php';
    }

    public function create(){
        require '../views/product/create.php';
    }

    public function store(){
        $product = new Product();
        $product->create($_POST["name"],$_POST["price"]);
        header("Location: index.php");
    }

    public function edit($id){
        $product = new Product();
       $data=  $product->getById($id);
        require '../views/product/edit.php';
    }

    public function update($id){
        $product = new Product();
        $data=  $product->update($id,$_POST['name'],$_POST['price']);
         header("Location: index.php");
    }

    public function delete($id){
        $product = new Product();
        $data=  $product->delete($id);
        header("Location: index.php");
    }

}

?>