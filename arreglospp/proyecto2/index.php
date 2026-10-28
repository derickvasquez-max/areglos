<?php
require __DIR__ . '/config/app.php';
require __DIR__ . '/lib/planilla.php';
$lista = empleados();
$sel = isset($_GET['legajo']) ? buscar_empleado($lista, (int)$_GET['legajo']) : null;
?><!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= NOMBRE_SISTEMA ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="bg-light">
<nav class="navbar navbar-dark" style="background:#243447"><div class="container">
 <span class="navbar-brand"><?= NOMBRE_SISTEMA ?></span><a class="btn btn-outline-light btn-sm" href="../index.php">← Menú principal</a></div></nav>
<div class="container py-4"><div class="row g-4">
 <div class="col-lg-8"><h5>Planilla de empleados (<?= count($lista) ?>)</h5>
  <div class="table-responsive"><table class="table table-striped table-bordered bg-white align-middle">
   <thead class="table-dark"><tr><th>Legajo</th><th>Nombre</th><th>DNI</th><th>Profesión</th><th class="text-end">Sueldo base</th><th></th></tr></thead><tbody>
   <?php foreach ($lista as $e): ?>
    <tr class="<?= $sel && $sel['legajo'] === $e['legajo'] ? 'table-primary' : '' ?>">
     <td><?= $e['legajo'] ?></td><td><?= $e['nombre'] ?></td><td><?= $e['dni'] ?></td><td><?= $e['profesion'] ?></td>
     <td class="text-end"><?= dinero($e['sueldo']) ?></td>
     <td><a class="btn btn-sm btn-primary" href="?legajo=<?= $e['legajo'] ?>">Boleta</a></td></tr>
   <?php endforeach ?></tbody></table></div></div>
 <div class="col-lg-4"><h5>Boleta de pago</h5>
  <?php if ($sel): ?>
  <div class="card"><div class="card-header fw-bold">Legajo <?= $sel['legajo'] ?></div><div class="card-body">
   <p class="mb-1"><b><?= $sel['nombre'] ?></b><br>DNI: <?= $sel['dni'] ?> · <?= $sel['profesion'] ?></p><hr>
   <div class="d-flex justify-content-between"><span>Sueldo base</span><span><?= dinero($sel['sueldo']) ?></span></div>
   <div class="d-flex justify-content-between text-success"><span>Bonificación (5%)</span><span>+ <?= dinero(calcular_bono($sel)) ?></span></div>
   <div class="d-flex justify-content-between text-danger"><span>Aporte AFP (10%)</span><span>- <?= dinero(calcular_afp($sel)) ?></span></div><hr>
   <div class="d-flex justify-content-between fs-5 fw-bold"><span>Neto a pagar</span><span><?= dinero(calcular_neto($sel)) ?></span></div>
  </div></div>
  <?php else: ?><div class="alert alert-secondary">Selecciona un empleado para ver su boleta.</div><?php endif ?>
 </div></div></div></body></html>
