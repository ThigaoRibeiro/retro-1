<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();


 $user = $model->bootstrap(
    "Gabriel Santos",
    "gabriel.santos3@gmail.com",
    "89745123",
    "rua",
    "complemento",
    "bairo",
    "cidade",
    "cep",
    "referencia",
    "2356897859"
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



$nome = array(
    "nome"=> "Yuri", 
    "sobrenome1"=>"Santos", 
    "sobrenome2"=>"Passos", 
    "sobrenome3"=>"Monte"
);

//$key = implode(", ", array_keys($nome));
$value = array_values(array_slice($nome, 0, 2));
$values = ":" . implode(", :", array_values($value));

var_dump(
    $nome,
   // $key,
    $value,
    $values    
);