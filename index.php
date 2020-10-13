<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$user3 = $model->loadCliente(2);
$user3->nome= "Bruno";
$user3->save();


$user2 = $model->loadCliente(2);


var_dump($user3, $user2);