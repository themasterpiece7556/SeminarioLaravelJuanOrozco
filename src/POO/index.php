<?php
require_once "Producto.php";

$prod1 = new Producto("Laptop Gamer", 1500);
$prod2 = new Producto("Mouse Inalámbrico", 80);$prod3 = new Producto("Cable UTP", 20, 0.19, "Electronica");
$prod4 = new Producto("Silla Rimax", 100, 0.19, "Oficina");
$prod5 = new Producto("Colchon Inflable", 200, 0.19, "Hogar");

echo "<h2>Catálogo POO </h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "<li>" . $prod4->getInfo() . "</li>";
echo "<li>" . $prod5->getInfo() . "</li>";
echo "</ul>";
?>