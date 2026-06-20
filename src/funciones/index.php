<?php
function calcularPrecioFInal($precio, $iva = 0.19){
    return $precio * (1+ $iva);
  }

  $inventario = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45
  ];

  echo "<h2>Precios con IVA incluidos</h2>";
  foreach($inventario as $nombre => $precio){
      $precioFinal = calcularPrecioFinal($precio);
      if($precioFinal > 100){
        echo "<p><strong style='color:red';>$nombre: $$precioFinal (Caro)</strong></p>";
      } else{
        echo "<p>$nombre: $$precioFinal {Económico}</p>";
      } 
    
      }

  function esMayorDeEdad($edad){
    if($edad >=18){
      return true;
    } else{
      return false;
    }
    }

    $edades = [12, 25, 17, 30, 15];

    foreach($edades as $edad){
      if(esMayorDeEdad($edad)){
        echo "<p>$edad años: Mayor de edad</p>";
      } else{
        echo "<p>$edad años: Menor de edad</p>";
      }
    }
  

  ?>