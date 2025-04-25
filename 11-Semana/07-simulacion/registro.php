<?php
// Simulando una "base de datos" de usuarios
$usuarios = [
    ["email" => "usuario@ejemplo.com", "password" => "123456"]
];

$response = ['status' => 'error', 'message' => 'Error al registrar al usuario.'];

// Obtener los datos enviados
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validación de datos
if (strlen($password) < 6) {
    $response = ['status' => 'error', 'message' => 'La contraseña debe tener al menos 6 caracteres.'];
} elseif (emailExists($email, $usuarios)) {
    $response = ['status' => 'error', 'message' => 'El email ya está registrado.'];
} else {
    // Simular el registro (guardar en base de datos)
    $usuarios[] = ['nombre' => $nombre, 'email' => $email, 'password' => $password];
    $response = ['status' => 'success', 'message' => 'Usuario registrado con éxito.'];
}

// Función para verificar si el email ya existe
function emailExists($email, $usuarios)
{
    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            return true;
        }
    }
    return false;
}

// Enviar respuesta en formato JSON
echo json_encode($response);
?>