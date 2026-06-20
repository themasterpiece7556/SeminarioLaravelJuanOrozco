<?php
$frutas = ["manzana", "banana", "naranja"];
echo "La segunda fruta es:" . $frutas[1] . "<br>";

$productos = [
  "laptop" => 1200,
  "Mouse" => 25,
  "Teclado" => 45,
  "Monitor" => 300
];
echo "<h2>Lista de productos </h2>";
echo "<ul>";
$total = 0 ;
$totalIva = 0;
foreach ($productos as $nombre => $precio){
  echo "<li>$nombre: $precio</li>";
  $total += $precio;
  
}
  $totalIva = $total * 1.19;
  echo "</ul>";
  echo "<p><strong>Total sin IVA: $$total</strong></p>";
  echo "<p><strong>Total con IVA: $$totalIva</strong></p>";

  
?>