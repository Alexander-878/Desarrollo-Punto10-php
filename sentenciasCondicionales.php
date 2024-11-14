<?php


// IF
$edad = 18;
if ($edad >= 18) {
    echo "Eres mayor de edad.";
} else {
    echo "Eres menor de edad.";
}


// SWITCH
$dia = "lunes";
switch ($dia) {
    case "lunes":
        echo "Inicio de semana.";
        break;
    default:
        echo "Otro día.";
}
