<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserAddress;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserAddress();

$user = $model->loadEndereco(6 );
var_dump($user);


