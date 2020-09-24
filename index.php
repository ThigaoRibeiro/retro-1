<?php
require_once 'vendor/autoload.php';


$model = new \Source\CRUD\Models\UserModel();

$user = $model->loadCliente(1);
var_dump(
    $user
);