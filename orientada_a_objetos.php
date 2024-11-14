<?php

class Persona {
    public $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, soy $this->nombre.";
    }
}

$juan = new Persona("Juan", 25);
echo $juan->saludar(); // muestra: Hola, soy Juan.
