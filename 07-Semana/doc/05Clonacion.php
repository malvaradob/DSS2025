<?php

class Libro
{

    public $titulo;
    public $autor;
    public $anioPublicacion;

    // Construtor 
    public function __construct($titulo, $autor, $anioPublicacion)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
    }

    // Metodo para imprimir informacion
    public function mostrarInformacion(){
        echo "Titulo: {$this->titulo} <br>";
        echo "Autor: {$this->autor} <br>";
        echo "Año publicacion: {$this->anioPublicacion} <br>";
    }

    // Uso del metodo __clone()
    public function __clone(){
        $this->titulo = $this->titulo." (Copia)";
    }


}

// Creamos un objeto
$libroOriginal = new Libro("PHP","Juan Perez",2025);
echo "Informacion del libro original: <br>";
$libroOriginal->mostrarInformacion();
echo "<hr>";

// Clonacion del objeto
$libroClonado = clone $libroOriginal;
echo "Informacion del libro clonado<br>";
$libroClonado->mostrarInformacion();

?>