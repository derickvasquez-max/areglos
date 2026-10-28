<?php
$frutas = array("Pera", "Manzana", "Sandía");
echo "<pre>Antes de agregar..."; print_r($frutas);
array_push($frutas, "Limón", "Naranja", "Guayaba");
echo "Después de agregar..."; print_r($frutas); echo "</pre>";
