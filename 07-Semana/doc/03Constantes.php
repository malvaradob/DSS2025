<?php

class Vehiculo{

    //Definicino de constantes dentro de la clase
    const MARCA = "HONDA";

    // Propiedades de la clase
    public $modelo;
    public $color;

    // Contructor
    public function __construct($modelo,$color){
        $this->modelo = $modelo;
        $this->color = $color;
    }

    // Creando la impresion de datos
    public function mostrarDatos(){
        echo "Marca :".self::MARCA."<br>";
        echo "Modelo : ".$this->modelo."<br>";
        echo "Color: ".$this->color."<br>";
    }

}

// Creando el objeto
$vehiculo1 = new Vehiculo("Civic","Negro");

// Mostrando la informacion del objeto
$vehiculo1->mostrarDatos();

// Accediendo a las constantes sin crear un objeto
echo "Contante de Marca sin crear un objeto: ". Vehiculo::MARCA."<br>";

?>