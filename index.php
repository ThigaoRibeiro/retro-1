<?php
require_once 'vendor/autoload.php';


$model = new \Source\CRUD\Models\UserModel();

<<<<<<< HEAD
$user = $model->loadCliente(1);
var_dump(
    $user
);
=======
$user = $model->load(1);
>>>>>>> 34a492e643032ed77d6263f8243e319ae901a62c
