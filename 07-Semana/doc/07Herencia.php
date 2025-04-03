<?php

class Persona{
    public $nombre;

    public function saludar(){
        echo "Buen día, ".$this->nombre;
    }
}

class Estudiante extends Persona{

    public function saludar(){
        echo "Buen día, ".$this->nombre;
    }
}

$estudiante = new Estudiante();
$estudiante->nombre = "Armando Palacios";
$estudiante->saludar();

?>