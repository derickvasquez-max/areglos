<?php
// Arreglo asociativo multidimensional: catálogo de productos
function catalogo(): array {
    return [
        ['codigo' => 'L001', 'nombre' => 'Lápiz',          'categoria' => 'Escritura', 'precio' => 1.50,  'stock' => 100],
        ['codigo' => 'L002', 'nombre' => 'Goma',           'categoria' => 'Escritura', 'precio' => 2.00,  'stock' => 60],
        ['codigo' => 'L003', 'nombre' => 'Hoja bond',      'categoria' => 'Papelería', 'precio' => 0.20,  'stock' => 500],
        ['codigo' => 'L004', 'nombre' => 'Tinta de impresora', 'categoria' => 'Insumos', 'precio' => 8.50, 'stock' => 25],
        ['codigo' => 'L005', 'nombre' => 'Cuaderno A4',    'categoria' => 'Papelería', 'precio' => 6.00,  'stock' => 40],
        ['codigo' => 'L006', 'nombre' => 'Lapicero azul',  'categoria' => 'Escritura', 'precio' => 1.20,  'stock' => 150],
    ];
}
function total_articulos(array $c): int { return count($c); }
function valor_total(array $c): float {
    $t = 0;
    foreach ($c as $p) { $t += $p['precio'] * $p['stock']; }
    return $t;
}
function categorias(array $c): array { return array_values(array_unique(array_column($c, 'categoria'))); }
function filtrar(array $c, string $texto, string $categoria): array {
    return array_values(array_filter($c, function ($p) use ($texto, $categoria) {
        $okTexto = $texto === '' || stripos($p['nombre'], $texto) !== false;
        $okCat   = $categoria === '' || $p['categoria'] === $categoria;
        return $okTexto && $okCat;
    }));
}
function dinero(float $n): string { return MONEDA . ' ' . number_format($n, 2); }
