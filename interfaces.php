<?php

interface Volable {
    public function volar();
}

class Pajaro implements Volable {
    public function volar() {
        echo "El pájaro vuela.";
    }
}

$pajaro = new Pajaro();
$pajaro->volar(); // muestra: El pájaro vuela.
