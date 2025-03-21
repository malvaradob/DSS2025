<?php

class Contador{

    // Propiedad estatica
    public static $contador = 0;

    // Metodo para incrementar el valor de la propiedad contador
    public static function incrementarContador(){
        // Incrementando el valor de la propiedad contador
        self::$contador++;
    }

    public static function obtenerContador(){
        return self::$contador;
    }

    // Metodo no estatico
    public function saludar(){
        echo "Saludos desde la clase contador<br>";
    }
}

// Accediendo a la clase con sus metodos y propiedades estaticas
/*$objeto = new Contador();
//$objeto->contador =1;
$objeto->incrementarContador();
$objeto->incrementarContador();
echo $objeto->obtenerContador();*/

Contador::incrementarContador();
Contador::incrementarContador();

echo "Contador despues de dos incrementos : ".Contador::obtenerContador()."<br>";

// Acceder la propiedad que no es static
$objeto = new Contador();
$objeto->saludar();

?>