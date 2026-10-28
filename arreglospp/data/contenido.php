<?php
// Contenido de la clase. Cada archivo listado se muestra (código) y se ejecuta (resultado).
$secciones = [
 ['t'=>'Teoría','items'=>[
  ['id'=>'t1','tag'=>'Tema 01','t'=>'¿Qué es un arreglo o array?','s'=>'Grupo de elementos relacionados entre sí por medio de índices.','p'=>[
   'Un arreglo es un grupo de elementos relacionados entre sí por medio de índices. Pueden ser de una dimensión (vectores, ej. <code>$empleado[23]</code>), de dos (matrices, ej. <code>$butaca[3, 14]</code>) o de tres o más (multidimensionales, ej. <code>$fecha[2012, 9, 22]</code>).',
   'Para acceder a los elementos se usan corchetes [] con un índice entero. Se pueden guardar valores de cualquier tipo (string, entero, punto flotante, booleano). Ej.: <code>$empleado[23] = "Juan Pérez Suárez";</code> (array de strings) o <code>$empleado[23] = 2312;</code> (array numérico).'],
   'files'=>[['Antes y después de agregar (print_r)','ejemplos/ejemplo00.php']]],
  ['id'=>'t2','tag'=>'Tema 02','t'=>'Vectores (arrays de una dimensión)','s'=>'Forma general, índices automáticos y el constructor array().','p'=>[
   'Los vectores son arrays que sólo contienen una dimensión (un índice). Forma general: <b>$nombreDeVariableArray [localizador] = valorAsignado;</b>',
   'PHP permite omitir los índices: los coloca automáticamente, siempre desde cero. También existe la forma abreviada <b>$nombre = array(valor0, valor1, ..., valorN)</b>; la palabra clave <b>array</b> indica que lo que sigue son elementos de un array.'],
   'files'=>[['ejemplo01.php','ejemplos/ejemplo01.php'],['ejemplo02.php','ejemplos/ejemplo02.php'],['ejemplo03.php','ejemplos/ejemplo03.php']]],
  ['id'=>'t3','tag'=>'Tema 03','t'=>'Función count','s'=>'Devuelve el número de elementos de un array.','p'=>[
   'Antes de recorrer un array debemos saber su tamaño. La función <b>count</b> devuelve el número de elementos: para un array de 4 elementos devuelve 4 (los índices serán 0, 1, 2 y 3).'],
   'files'=>[['ejemplo04.php','ejemplos/ejemplo04.php']]],
  ['id'=>'t4','tag'=>'Tema 04','t'=>'Recorrido de arrays de una dimensión','s'=>'Recorrer con for y con foreach.','p'=>[
   'Recorrer un array permite extraer o comprobar los valores de cada elemento. <b>for</b> usa un contador junto con count(). <b>foreach</b> es la forma “cómoda” de PHP y se usa mucho al obtener datos de una base de datos.',
   'Sintaxis 1: <code>foreach ($array as $valor) { ... }</code><br>Sintaxis 2 (asociativos): <code>foreach ($array as $clave => $valor) { ... }</code>'],
   'files'=>[['Recorrido con for — ejemplo05.php','ejemplos/ejemplo05.php'],['Recorrido con foreach — ejemplo06.php','ejemplos/ejemplo06.php']]],
  ['id'=>'t5','tag'=>'Tema 05','t'=>'Arrays asociativos en PHP','s'=>'Arrays cuyos keys son strings personalizados.','p'=>[
   'Los arrays asociativos son arrays cuyos keys son strings personalizados. Se asocia el índice con el valor mediante el operador <b>=></b>; el índice va entre comillas simples y se accede con corchetes. También puede usarse una variable string como índice, o la declaración habitual <code>$var[\'indice\'] = valor;</code>'],
   'files'=>[['ejemplo07.php','ejemplos/ejemplo07.php'],['Índice en una variable','ejemplos/ejemplo07b.php'],['ejemplo08.php','ejemplos/ejemplo08.php']]],
 ]],
 ['t'=>'Casos prácticos a desarrollar','items'=>[
  ['id'=>'caso1','tag'=>'Caso 01','t'=>'Días de la semana','s'=>'Almacenar los días de la semana en un vector (índice desde 0) e imprimirlos uno debajo de otro usando for y count.','p'=>[],'files'=>[['Solución','casos/caso1.php']]],
  ['id'=>'caso2','tag'=>'Caso 02','t'=>'Países de Sudamérica','s'=>'Almacenar los países de Sudamérica en un vector (sin colocar índice) e imprimirlos usando foreach.','p'=>[],'files'=>[['Solución','casos/caso2.php']]],
  ['id'=>'caso3','tag'=>'Caso 03','t'=>'Meses del año','s'=>'Inicializar un vector con los meses del año mediante el constructor array y mostrarlo con foreach.','p'=>[],'files'=>[['Solución','casos/caso3.php']]],
  ['id'=>'caso4','tag'=>'Caso 04','t'=>'Artículos de librería','s'=>'Cargar en un vector los artículos ("Lápiz","Goma","Hoja","Tinta") e imprimir la cantidad. Usar el constructor array.','p'=>[],'files'=>[['Solución','casos/caso4.php']]],
  ['id'=>'caso5','tag'=>'Caso 05','t'=>'Datos de un empleado','s'=>'Almacenar en un vector los datos de un empleado (Legajo 4371, Martínez Leandro, DNI 27643742, Sueldo 1429.54, Arquitecto) y mostrarlos.','p'=>[],'files'=>[['Solución','casos/caso5.php']]],
 ]],
 ['t'=>'Proyectos','items'=>[
  ['id'=>'proy1','tag'=>'Proyecto 01','t'=>'Inventario “Librería San Cristóbal”','s'=>'PHP 8 + Bootstrap 5: arreglo asociativo multidimensional, count(), valor total y filtro por formulario.','link'=>'proyecto1/index.php'],
  ['id'=>'proy2','tag'=>'Proyecto 02','t'=>'Planilla de Empleados y Liquidación de Sueldos','s'=>'PHP 8 + Bootstrap 5: AFP 10%, bonificación 5% a Arquitecto/Ingeniero y boleta de pago neta.','link'=>'proyecto2/index.php'],
 ]],
];
