<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$user = $model->bootstrap(
    "Robson",
    "Leite",
    "djalma@gmail.com.br",
    34892493349
);

if (!$model->find($user->email)) {
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
} else {
    echo "<p class='trigger accept'>Read</p>";
    $user = $model->find($user->email);
}

var_dump($user);

