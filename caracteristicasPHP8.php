<?php


// 1. Uso de `match` en lugar de `switch` (más elegante y flexible)
$statusCode = 200;
$message = match ($statusCode) {
    200, 201 => 'Operación exitosa', // Coincide con múltiples valores
    400 => 'Solicitud incorrecta',
    404 => 'No encontrado',
    default => 'Estado desconocido'
};
echo $message; // Muestra: Operación exitosa

// 2. Ejemplo de tipos de unión (Union Types)
function procesarNumero(int|float $numero): int|float
{
    return $numero * 2;
}

echo procesarNumero(5.5); // Muestra: 11

// 3. Propiedades promovidas en el constructor (reducen el código repetitivo)
class Producto
{
    public function __construct(
        public string $nombre,
        private float $precio
    )
    {
    }

    public function obtenerPrecio(): float
    {
        return $this->precio;
    }
}

$producto = new Producto("Zapatos", 99.99);
echo $producto->nombre; // Muestra: Zapatos

// 4. Operador `nullsafe` para evitar errores al acceder a propiedades/métodos nulos
$obj = null;
$resultado = $obj?->metodoInexistente(); // No genera error; devuelve null

// 5. Nuevas funciones útiles: `str_contains`, `str_starts_with`, `str_ends_with`
$texto = "Bienvenido a PHP 8";
echo str_contains($texto, 'PHP') ? 'Contiene PHP' : 'No contiene PHP'; // Muestra: Contiene PHP


