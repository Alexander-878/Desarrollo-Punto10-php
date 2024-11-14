<?php

class MiClase {
    const CONSTANTE = "Soy una constante";

    public function mostrarConstante() {
        return self::CONSTANTE;
    }
}

$obj = new MiClase();
echo $obj->mostrarConstante(); // muestra: Soy una constante
