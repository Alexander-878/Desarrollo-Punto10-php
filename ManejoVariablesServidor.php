<?php


// EJEMPLO DE COMO UTILIZAR VARIABLES EN SERVIDOR

$nombre = $_POST['nombre'] ?? '';
$archivo = $_FILES['archivo']['name'];
echo $_SESSION['usuario'] ?? 'Invitado';
setcookie("usuario", "Juan", time() + 3600);

