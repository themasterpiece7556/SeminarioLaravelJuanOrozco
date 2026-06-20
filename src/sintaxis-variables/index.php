<?php
  define("CONSTANTE","Este valor es constante y no puede ser cambiado");
  $nombre = "Juan";
  $edad = 30;
  $ciudad = "Cartago";  
  $carrera = "Ingeniería en Sistemas";
  $semestre = 7;
  $materia = "Programación Web";
  echo "Hola, mi nombre es $nombre, tengo $edad años, vivo en $ciudad y estudio $carrera<br>";

  echo 'Hola, mi nombre es $nombre, tengo $edad años, vivo en $ciudad y estudio $carrera<br>';

  echo CONSTANTE."<br>";

  echo "Estoy en el $semestre semestre de mi carrera y mi materia favorita es $materia<br>";
?>