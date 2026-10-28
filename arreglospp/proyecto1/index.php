<?php
require __DIR__ . '/config/app.php';
require __DIR__ . '/lib/inventario.php';
$todos = catalogo();
$q   = trim($_GET['q'] ?? '');
$cat = $_GET['cat'] ?? '';
$lista = filtrar($todos, $q, $cat);
?><!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= NOMBRE_SISTEMA ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
<nav class="navbar navbar-dark" style="background:#243447"><div class="container">
 <span class="navbar-brand"><?= NOMBRE_SISTEMA ?></span><a class="btn btn-outline-light btn-sm" href="../index.php">← Menú principal</a></div></nav>
<div class="container py-4">
 <div class="row g-3 mb-4">
  <div class="col-md-4"><div class="card text-center"><div class="card-body"><div class="text-muted small">Total de artículos (count)</div><div class="fs-2 fw-bold"><?= total_articulos($todos) ?></div></div></div></div>
  <div class="col-md-4"><div class="card text-center"><div class="card-body"><div class="text-muted small">Valor total del inventario</div><div class="fs-2 fw-bold"><?= dinero(valor_total($todos)) ?></div></div></div></div>
  <div class="col-md-4"><div class="card text-center"><div class="card-body"><div class="text-muted small">Resultados del filtro</div><div class="fs-2 fw-bold"><?= count($lista) ?></div></div></div></div>
 </div>
 <form class="row g-2 mb-3" method="get">
  <div class="col-md-5"><input class="form-control" name="q" placeholder="Buscar producto..." value="<?= htmlspecialchars($q) ?>"></div>
  <div class="col-md-4"><select class="form-select" name="cat"><option value="">Todas las categorías</option>
   <?php foreach (categorias($todos) as $c): ?><option <?= $c === $cat ? 'selected' : '' ?>><?= $c ?></option><?php endforeach ?></select></div>
  <div class="col-md-3 d-grid"><button class="btn btn-primary">Filtrar</button></div>
 </form>
 <div class="table-responsive"><table class="table table-striped table-bordered bg-white">
  <thead class="table-dark"><tr><th>Código</th><th>Producto</th><th>Categoría</th><th class="text-end">Precio</th><th class="text-end">Stock</th><th class="text-end">Subtotal</th></tr></thead>
  <tbody>
  <?php foreach ($lista as $p): ?>
   <tr><td><?= $p['codigo'] ?></td><td><?= $p['nombre'] ?></td><td><?= $p['categoria'] ?></td>
    <td class="text-end"><?= dinero($p['precio']) ?></td><td class="text-end"><?= $p['stock'] ?></td>
    <td class="text-end"><?= dinero($p['precio'] * $p['stock']) ?></td></tr>
  <?php endforeach ?>
  <?php if (!$lista): ?><tr><td colspan="6" class="text-center text-muted">Sin resultados</td></tr><?php endif ?>
  </tbody></table></div>
</div></body></html>
