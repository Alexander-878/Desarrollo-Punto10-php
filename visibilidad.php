<?php

class Ejemplo {
    public $publico = "Público";
    private $privado = "Privado";
    protected $protegido = "Protegido";

    public function mostrar() {
        echo $this->privado; // Acceso permitido
    }
}

$obj = new Ejemplo();
echo $obj->publico; // Acceso permitido
// echo $obj->privado; // Error: no accesible
// echo $obj->protegido; // Error: no accesible
$obj->mostrar(); // Output: Privado
