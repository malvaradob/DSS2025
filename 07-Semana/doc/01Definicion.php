<?php

class Usuario{

    // Propiedad
    private $nombre;
    private $apellidos;
    private $edad;
    public $direccion;
    protected $telefono;

    // Contructores
    public function __construct($nombre,$apellidos,$edad, $telefono){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->telefono = $telefono;
    }


    // Destructor
    public function __destruct(){
        echo "<br>El usuario '{$this->nombre}' '{$this->apellidos}' '{$this->edad}' ha sido destruido";
    }


    // Metodos 
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function mostrar(){
        echo "<br>Nombre: ".$this->nombre;
        echo "<br>Apellidos: ".$this->apellidos;
        echo "<br>Edad: ".$this->edad;
        echo "<br>Direccion: ".$this->direccion;
        echo "<br>Telefono: ".$this->telefono;

    }
}

class Alumno extends Usuario{

    public function mostrarTelefono(){
        echo "<br>Telefono : ".$this->telefono;
    }
}

// La instancia de la clase
/*$user1 = new Usuario();
$user1->setEdad(10);
$user1->setNombre("Gabriel Enrique");
$user1->setApellidos("Alas");
$user1->mostrar();

$user2 = new Usuario();
$user2->setNombre("Henry Alexander");
$user2->mostrar();*/

// Creacion de un objeto por medio de su constructor
$user3 = new Usuario("Rosa","Alvarenga",26,"2525-3030");
$user3->direccion = "San Salvador";
//$user3->telefono = "2525-3030";
$user3->mostrar();

// destrucion del objeto $user3
unset($user3);

// Creacion de un usuario heredado
$alumno1 = new Alumno("Luis","Rivas",19,"2690-3497");
$alumno1->mostrarTelefono();

?>