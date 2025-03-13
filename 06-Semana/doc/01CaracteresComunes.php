<?php
/* 
    A. \d -> es equivalente a tener e rango del  0-9
    B. \D -> Coicida con cualquier caracter que no sea un digito
    C. \w -> Coicida con cualquier caracter alfanumerico -> letras, numeros y guion bajo
    D. \W -> Coicida con cualquier caracter que no sea alfanumerico
    E. \s -> Coicida con cualquier espacio en blanco -> espacios, tabulaciones y saltos de linea
    F. \S -> Coicida con cuaquier caracter que no sea un espacio en blanco
    G. "." -> Coicida con cualquier caracter excepto el salto de linea 
    H. "+" -> Coicida con uno o mas caractres previos
    I. "*" -> Coicida con cero o mas caracteres previos
    J. "?" -> Coicida con cero o una vez con el caracter previo
    K. "^" -> Indica el inicio de la cadena
    L. "$" -> Inidicar el fin de la cadena
    M. "[]" -> Definen un conjunto de caracteros
    N. "|" -> Representa un OR
    Ñ. "()" -> Definicion de agrupamiento 
*/



// Literal A
//$dato = "A555";
//$patron = "/^[\d]{1,}/";

// Literal B
//$dato = "5";
//$patron = "/[\D]{1,}/";

// Literal C
//$dato = "$";
//$patron = "/[\w]{1,}/";

// Literal D
//$dato = "$";
//$patron = "/[\W]{1,}/";

// Literal E
//$dato = " ";
//$patron = "/[\s]{1,}/";


// Literal F
//$dato = " ";
//$patron = "/[\S]{1,}/";

// Literal G
$dato = " 
";

$patron = "/[.]{1,}/";


// Literal H
$dato = "CAB";
$patron = "/[C]+[AB]{1,}/";

// Literal I
$dato = "ABC";
$patron = "/[C]*[AB]{1,}/";

// Literal J
$dato = "C9D";
$patron = "/[C]?[AB]{1,}/";


// Literal K
$dato = "9CBD";
$patron = "/^[C]*[AB]{1,}/";

// Literal L
$dato = "9CBDAF";
$patron = "/[C]*[AB]{1,}$/";


// Literal N
$dato = "MA7MAS";
$patron = "/[PAPA|MAMA]{1,}/";

if (preg_match($patron, $dato)) {
    echo "El dato es correcto segun el patron";
} else {
    echo "El dato no se ajusta al patron";
}



?>