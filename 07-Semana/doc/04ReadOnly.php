<?php

class Persona{

    // Propiedad readonly 
    public readonly int $idPersona;

    // Otras propiedades
    public string $nombre;
    public string $apellido;

    // Constructor
    public function __construct(int $idPersona, string $nombre, string $apellido){

        // Asignar los valores
        $this->idPersona = $idPersona;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // metodo para mostrar la informacion de la persona
    public function mostrarInformacion(){
        echo "ID Persona : {$this->idPersona}<br>";
        echo "Nombre : {$this->nombre}<br>";
        echo "Apellido : {$this->apellido}<br>";
    }
}


// Creando la instancia del objeto persona
$persona = new Persona(1556,"Ricardo","Urrutia");
$persona->idPersona = 6000;

$persona->mostrarInformacion();




?>