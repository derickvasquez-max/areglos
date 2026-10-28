<?php require __DIR__.'/data/contenido.php'; ?><!DOCTYPE html>
<html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Menú Principal - Arreglos en PHP</title><link rel="stylesheet" href="css/estilo.css"></head><body>
<header>Programación con Arreglos en PHP — Taller de Programación Web II</header>
<main><h1>MENÚ PRINCIPAL</h1>
<div class="panel"><div class="ph">Contenido de la clase</div><div class="pb">
<?php foreach ($secciones as $s): ?>
 <h2><?= $s['t'] ?></h2><div class="grid">
 <?php foreach ($s['items'] as $i):
   $url = $i['link'] ?? 'ver.php?id='.$i['id'];
   $es = (substr($i['tag'],0,4)==='Tema'); ?>
  <div class="card"><div class="tag"><?= $i['tag'] ?></div><h3><?= $i['t'] ?></h3>
   <div class="en"><b><?= $es?'Resumen':'Enunciado' ?>:</b> <?= $i['s'] ?></div>
   <a class="btn" href="<?= $url ?>">Ver <?= $es?'tema':(isset($i['link'])?'proyecto':'caso') ?></a></div>
 <?php endforeach ?></div>
<?php endforeach ?>
</div></div></main></body></html>
