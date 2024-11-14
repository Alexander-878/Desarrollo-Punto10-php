<?php


// 1. Uso de Enumeraciones (Enums) para definir valores constantes y manejarlos con seguridad
enum Estado
{
    case Activo;
    case Inactivo;
    case Suspendido;
}

$estado = Estado::Activo;
echo $estado->name; // Muestra: Activo

// 2. Fibers (Fibras) para crear multitarea cooperativa más flexible
$fiber = new Fiber(function (): void {
    echo "Inicio de la fibra.\n"; // Muestra: Inicio de la fibra.
    Fiber::suspend("Pausa de la fibra");
    echo "Reanudación de la fibra.\n"; // Se mostrará cuando se reanude
});
echo $fiber->start(); // Inicia la fibra y muestra el primer mensaje
echo $fiber->resume(); // Reanuda la fibra y muestra el segundo mensaje

// 3. Intersección de Tipos (Intersection Types) para mayor precisión en parámetros
interface A
{
}

interface B
{
}

class Ejemplo implements A, B
{
}

function aceptarAmbos(A&B $obj)
{
    echo "Objeto cumple ambas interfaces!";
}

$objeto = new Ejemplo();
aceptarAmbos($objeto); // Muestra: Objeto cumple ambas interfaces!

// 4. Propiedades `readonly` para asegurar que solo se puedan establecer una vez
class Usuario
{
    public readonly string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$usuario = new Usuario("María");
// $usuario->nombre = "Ana"; // Error: No se puede modificar una propiedad readonly


