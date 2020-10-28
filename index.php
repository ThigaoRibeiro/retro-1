<?php


use Source\CRUD\Models;
<<<<<<< HEAD
use Source\CRUD\Models\UserAddress;
=======
>>>>>>> c4f4895b2152d9680922a1d2029d3a31a5b8034f
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

<<<<<<< HEAD
$model = new UserAddress();

$user = $model->loadEndereco(6);
var_dump($user);

=======
$model = new UserModel();

$user = $model->loadCliente(1 );
$user->nome = "Daniel";
$user->email = "";
$user->save();

var_dump($user);
>>>>>>> c4f4895b2152d9680922a1d2029d3a31a5b8034f

