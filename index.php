<?php


use Source\CRUD\Models;

$model = new UserModel();
$user = $model->loadCliente(9);
if ($user) {
    $user->destroy();
}

var_dump($user);

$model = new UserAddress();

$user = $model->loadEndereco(6);
var_dump($user);


