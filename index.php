<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$user = $model->loadCliente(1);

<<<<<<< HEAD
$user->nome = "Daniel";
$user->email = "daniel.santos@zamboni.com.br";
=======
 $user = $model->bootstrap(
    "Thiago Santos",
    "thiago86.santos@gmail.com",
    "89745123"
);
>>>>>>> refs/remotes/retro/master


$user2 = $model->loadCliente(1);

<<<<<<< HEAD
$user->save();
var_dump($user);
=======
var_dump(
    $user
);



$nome = array(
    "nome"=> "Yuri",
    "sobrenome1"=>"Santos",
    "sobrenome2"=>"Passos",
    "sobrenome3"=>"Monte"
);

$key = implode(", ", array_keys($nome));
$value = array_values(array_slice($nome, 0, 2));
$values = ":" . implode(", :", array_values($value));

var_dump(
    $nome,
    $key,
    $value,
    $values
);



$model2 = new Models\UserAddress();

$user2 = $model2->loadEndereco(1);

var_dump($user2);
>>>>>>> refs/remotes/retro/master
