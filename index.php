<?php
require_once 'vendor/autoload.php';


$model = new \Source\CRUD\Models\UserModel();

$user = $model->loadCliente(1);
var_dump(
    $user,
    "{$user->nome}"
);


$userEmail = $model->find("yuri.spm@gmail.com");
var_dump(
    $userEmail,
    "{$userEmail->nome}"

);

$all = $model->all();
var_dump($all);