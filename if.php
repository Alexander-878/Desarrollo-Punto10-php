<?php
$age = 61;

if ($age < 18) {
    echo "Eres Menor de edad";
}elseif ($age > 18 && $age < 60) {
    echo "Eres Mayor de edad";
}elseif ($age > 60) {
    echo "Eres una persona de la tercera edad";
}else "Dato incorrecto";
