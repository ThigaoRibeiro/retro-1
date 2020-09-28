<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();


 $user = $model->bootstrap(
    "Thiago Santos",
    "thiago.santos@gmail.com",
    "89745123"
);

if(!$model->find($user->email)){
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();

}else{
    echo "<p class='trigger accept'>Read</p>";
}

var_dump(
    $user
);
