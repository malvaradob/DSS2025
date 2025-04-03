<?php

abstract class Animal{

    abstract public function hacerSonido();

    public function dormir($nombre){
        echo "El animal esta durmiendo<br>";
    }

}

class Perro extends Animal{
    public function hacerSonido(){
        echo "El perro ladra <br>";
    }

    // Polimorfismo
    public function dormir($nombre){
        echo "El perro {$nombre} esta durmiendo<br>";
    }
}

class Gato extends Animal{
    public function hacerSonido(){
        echo "El gato hace miau";
    }
}

// Realizo la creacion de un objeto de tipo animal
//$animal = new Animal();
//$animal->dormir();


// Creando un objeto de tipo perro
$perro = new Perro();
$perro->dormir("Totto");
$perro->hacerSonido();

// Crenado un objeto de tipo gato
$gato = new Gato();
$gato->dormir("Dante");
$gato->hacerSonido();

?>