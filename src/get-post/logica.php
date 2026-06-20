<?php
$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
        if (is_numeric($_POST['telefono'])) {
            $nombre_mostrado = htmlspecialchars($_POST['nombre']);
            $mensaje = "Bienvenido, " . $nombre_mostrado;
        } else {
            $mensaje = "El teléfono debe ser un número válido.";
        }
    } else {
        $mensaje = "Todos los campos son obligatorios.";
    }
    
}
?>
<p style="color:blue;" ><?= $mensaje ?></p>