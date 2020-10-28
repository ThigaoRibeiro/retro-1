<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$$user = $model->loadCliente(4);
$user ->email = "gabriel2.santos@gmail.com";
if ($user != $model->loadCliente(4)) {
    $user->save();
    echo "<p class='trigger warning'>Atualizado!</p>";
} else {
    echo "<p class='trigger accept'>Já atualizado!</p>";
}


var_dump($user);

