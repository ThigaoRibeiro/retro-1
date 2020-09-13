<?php
    require __DIR__. '/../source/autoload.php';

    use Source\Database\Connect;

    $pdo1 = Connect::getInstance();
    var_dump(
        $pdo1
    );
