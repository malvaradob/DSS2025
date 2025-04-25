<?php
// Definicion de parametros de la cadena de conexion
define('DB','localhost:3306');
define('NAME','soap');
define('USER','root');
define('PASSWORD','123456');

// Definiendo la conexion
function getDB(){
    $dbConexion = new PDO("mysql:host=".DB.";dbname=".NAME,USER,PASSWORD);
    $dbConexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $dbConexion;
}

?>