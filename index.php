<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$user = $model->loadCliente(1);

$user->nome = "MARCOS";
$user->email = "marcos2.santos@gmail.com";
$user->save();


//$user2 = $model->loadCliente(1);
//
//$user->save();
var_dump($user);
