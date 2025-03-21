<?php

class MiClase {

    // Propiedad que maneja el arreglo de propiedades magicas de mi clase
    private $datos=[];

    public function __get($nombre){
        return isset($this->datos[$nombre]) ? $this->datos[$nombre]:null;
    }

    public function __set($nombre,$valor){
        $this->datos[$nombre] = $valor;
    }

}

// Creando un objeto
$obj = new MiClase();
$obj->nombre = "Carlos Alas";
$obj->edad = 25;
echo "Nombre: ".$obj->nombre."<br>";
echo "Edad : ".$obj->edad;
?>