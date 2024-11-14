<?php
/*
// CONSTRUCTOR
// Constructores: Un constructor es un metodo
// especial que se ejecuta cuando una clase es instanciada.

class Persona {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Hola, $nombre!"; // Se ejecuta al crear la instancia
    }
}

$juan = new Persona("Juan"); // muestra: Hola, Juan!
*/

// DESTRUCTOR

class Archivo {
    public function __destruct() {
        echo "El objeto se destruye.";
    }
}

$obj = new Archivo();
