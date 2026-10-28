<?php
require __DIR__.'/data/contenido.php';
$item = null;
foreach ($secciones as $s) foreach ($s['items'] as $i) if ($i['id'] === ($_GET['id'] ?? '')) $item = $i;
if (!$item) { header('Location: index.php'); exit; }
$es = (substr($item['tag'],0,4)==='Tema');
?><!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $item['t'] ?></title><link rel="stylesheet" href="css/estilo.css"></head><body>
<header>Programación con Arreglos en PHP — Taller de Programación Web II</header>
<main><a class="btn back" href="index.php" style="display:inline-block">← Volver al menú</a>
<div class="panel view" style="margin-top:14px"><div class="ph"><?= $item['tag'] ?></div><div class="pb">
<h2><?= $item['t'] ?></h2>
<?php if (!$es): ?><div class="en"><b>Enunciado:</b> <?= $item['s'] ?></div><?php endif ?>
<?php foreach ($item['p'] as $p): ?><p><?= $p ?></p><?php endforeach ?>
<?php foreach ($item['files'] as [$label, $ruta]): $f = __DIR__.'/'.$ruta; ?>
 <div class="lb"><?= $label ?> (<?= $ruta ?>)</div>
 <div class="code"><?php highlight_file($f); ?></div>
 <div class="lb">Resultado en el navegador</div>
 <div class="out"><?php ob_start(); include $f; echo ob_get_clean(); ?></div>
<?php endforeach ?>
</div></div></main></body></html>
