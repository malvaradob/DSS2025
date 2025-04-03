<?php

interface Transporte{
    // Definir los metodos que deben ser implementados en la clase
    // que se esta heredando
    public function iniciarViaje();
    public function detenerViaje();
}


class Vehiculo implements Transporte{
    public function iniciarViaje(){
        echo "El vehiculo ha comenzado su viaje<br>";
    } 


    public function detenerViaje(){
        echo "El vehiculo ha detenido su viaje<br>";
    }
}

class Bicicleta implements Transporte{
 public function iniciarViaje(){
        echo "El vehiculo ha comenzado su viaje<br>";
    } 


    public function detenerViaje(){
        echo "El vehiculo ha detenido su viaje<b>";
    }
}

// Creando un objeto de tipo vehiculo
$vehiculo = new Vehiculo();
$vehiculo->iniciarViaje();
$vehiculo->detenerViaje();


$bicicleta = new Bicicleta();
$bicicleta->iniciarViaje();
$bicicleta->detenerViaje();
?>