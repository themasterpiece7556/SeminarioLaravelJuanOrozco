<?php
require_once 'UserModel.php';
$model = new UserModel();

echo "<h2>Usuarios desde el modelo</h2>";
$users = $model->getAll();
foreach ($users as $u){
  echo "{$u['nombre']} - {$u['email']} <br>";
}
?>