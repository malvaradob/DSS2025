<?php

// Cargar el archivo configuracion
require_once 'config/Config.php';

// Auto cargar clases
spl_autoload_register(function($nombre_clase){
    include 'modelo/'.$nombre_clase.'.class.php';
});

$estudiante = new Estudiante();

echo "<h1>Agregando un nuevo registro</h1>";
$estudiante->nombres= "Ricardo";
$estudiante->apellidos="Rivas";
$estudiante->fechaNacimiento = "1990-10-11";
$estudiante->email = "ricardo@gmail.com";
$estudiante->agregar();

echo "<h1>Consultar por medio de ForEach</h1>";
$estudiante->consultarForEach();



?>