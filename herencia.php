<?php


class Padre {
    public function mensaje() {
        return "Mensaje del padre.";
    }
}

class Hijo extends Padre {
    public function mensaje() {
        return "Mensaje del hijo.";
    }
}

$obj = new Hijo();
echo $obj->mensaje(); // muestra: Mensaje del hijo.
