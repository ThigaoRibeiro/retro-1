<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();
$user = $model->loadCliente(9);
if ($user) {
    $user->destroy();
}



var_dump($user);
