<?php
/*
// DECLARACION DE FUNCIONES
function suma($num) {
    $num += 5;
    return $num;
}

function sumaReferencia(&$num) {
    $num += 5;
}

$valor = 10;
echo suma($valor);
echo $valor;

sumaReferencia($valor);
echo $valor;
*/

// PARAMETROS POR VALOR

function saludar($nombre = "Amigo") {
    return "Hola, $nombre!";
}
echo saludar();

