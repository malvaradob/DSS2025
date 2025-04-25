<?php

// simular un usuario
$usuarios = [
    ["email"=> "usuario@gmail.com","password"=>"123456"]
];

$response = ['status'=>'error', 'message'=>'Credenciales incorrectas'];

// Obtener la informacion del formulario
$email = $_POST["email"];
$password = $_POST["password"];

foreach($usuarios as $usuario){
    if($usuario["email"]==$email && $usuario["password"]==$password){
        $response = ['status'=>'success', 'message'=>'Bienvenido!'];
    }
}

// Enviar los datos en formato JSON
echo json_encode($response);
?>