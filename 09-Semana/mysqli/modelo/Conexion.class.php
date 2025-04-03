<?php

class Conexion{
    private $DB_HOST;
    private $DB_USER;
    private $DB_PASSWORD;
    private $DB_DATA;
    private $DB_PORT;
    private $DB_CHARSET;
public $conection;

function __construct(){    
    $this->DB_HOST = defined("SERVER")?SERVER:'';
    $this->DB_USER = defined("USER")?USER:'';
    $this->DB_PASSWORD = defined("PASSWORD")?PASSWORD:'';
    $this->DB_DATA = defined("DB")?DB:'';
    $this->DB_CHARSET = defined("CHARSET")?CHARSET:'';
    $this->DB_PORT = defined(constant_name: "PORT")?PORT:'';
}

public function connect(){
    $mysqli = new mysqli($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD,$this->DB_DATA,$this->DB_PORT);
    // Verificando que la conexion sea exitosa
    if($mysqli->connect_error){
        echo "Error de conexion: ".$mysqli->connect_errno.":".$mysqli->connect_error;
        return false;
    }else{
        // Estableciendo la conexion y aplicando el tema de caracteres
        $mysqli->set_charset($this->DB_CHARSET);

        // Creando la referencia de nuestra conexion
        $this->conection = $mysqli;
        return true;
    }
}

public function desconect(){
    $this->conection->close();
}

}
?>