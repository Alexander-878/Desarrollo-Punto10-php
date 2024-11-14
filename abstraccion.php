<?php

abstract class Animal {
    abstract public function hacerSonido();
}

class Perro extends Animal {
    public function hacerSonido() {
        return "Guau";
    }
}

$perro = new Perro();
echo $perro->hacerSonido(); // muestra: Guau
