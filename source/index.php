<?php

require_once "/autoload.php";

$layer = new ReflectionClass(\Source\CRUD\Models::class);

var_dump(
    $layer->getDefaultProperties(),
    $layer->getMethods()


);
echo "teste";

