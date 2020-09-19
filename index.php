<?php
require_once 'vendor/autoload.php';


$model = new \Source\CRUD\Models\UserModel();

$user = $model->load(1);