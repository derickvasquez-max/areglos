<?php
// Arreglo multidimensional asociativo de empleados
function empleados(): array {
    return [
        ['legajo' => 4371, 'nombre' => 'Martínez Leandro', 'dni' => '27643742', 'sueldo' => 1429.54, 'profesion' => 'Arquitecto'],
        ['legajo' => 4372, 'nombre' => 'Quispe Rosa',      'dni' => '45612378', 'sueldo' => 1800.00, 'profesion' => 'Ingeniero'],
        ['legajo' => 4373, 'nombre' => 'Torres Carlos',    'dni' => '40871234', 'sueldo' => 1200.00, 'profesion' => 'Contador'],
        ['legajo' => 4374, 'nombre' => 'Flores Ana',       'dni' => '47125896', 'sueldo' => 1000.00, 'profesion' => 'Secretaria'],
    ];
}
function calcular_afp(array $e): float { return $e['sueldo'] * AFP; }
function calcular_bono(array $e): float {
    return in_array($e['profesion'], PROFESIONES_BONO) ? $e['sueldo'] * BONO : 0.0;
}
function calcular_neto(array $e): float { return $e['sueldo'] + calcular_bono($e) - calcular_afp($e); }
function buscar_empleado(array $lista, int $legajo): ?array {
    foreach ($lista as $e) { if ($e['legajo'] === $legajo) return $e; }
    return null;
}
function dinero(float $n): string { return MONEDA . ' ' . number_format($n, 2); }
