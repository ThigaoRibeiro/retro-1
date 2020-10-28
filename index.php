<?php


use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;

require_once 'vendor/autoload.php';

$model = new UserModel();

$user = $model->loadCliente(6);

var_dump($user);
/* Load Cliente ok

$model = new UserModel();

$user = $model->loadCliente(6);

var_dump($user);
*/

/*Bootstrap




$user = $model->bootstrap(
    "Robson",
    "curso@upinside.com.br",
    34892493349
);

var_dump($user);
echo "<hr/>";

if (!$model->find($user->email)) {
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
} else {
    echo "<p class='trigger accept'>Read</p>";
    $user = $model->find($user->email);
}

var_dump($user);
*/



/* Atualizando

$user = $model->loadCliente(10);

$user->email = "joao.carlos@gmail.com";
if ($user != $model->loadCliente(10)) {
    $user->save();
    echo "<p class='trigger warning'>Atualizado!</p>";
} else {
    echo "<p class='trigger accept'>Já atualizado!</p>";
}

*/


/* Removendo




$user = $model->loadCliente(10);
if ($user) {
    $user->destroy();
}

var_dump($user);


*/