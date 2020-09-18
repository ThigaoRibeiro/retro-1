<?php
require_once 'vendor/autoload.php';

$layer = new ReflectionClass(\Source\CRUD\Models\Model::class);

var_dump(
    $layer->getDefaultProperties(),
    $layer->getMethods()
);