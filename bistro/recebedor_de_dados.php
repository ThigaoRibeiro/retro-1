<?php

<<<<<<< HEAD
require __DIR__."/Source/Classes/Pessoa.php";
=======
//require __DIR__.'../../Source/Classes/Pessoa.php';
>>>>>>> 8caf8a7bcdff56d5d7807db718e65d4e538374ae
//require __DIR__."/Source/Classes/Endereço.php";
//require __DIR__."/Source/Classes/Funcionario.php";
//require __DIR__."/Source/Classes/Cliente.php";
//require __DIR__."/Source/Classes/Produto.php";
//require __DIR__."/CRUD/insert/";


//----------------------------------------------CADASTRO DE CLIENTE-------------------------------------------------

//$cliente = new Pessoa($cpf, $nome, $email, $telefone);

<<<<<<< HEAD
    $pessoa = new Source\Classes\Pessoa(
        $_POST['cpf'],
        $_POST['nome'],
        $_POST['email'],
        $_POST['telefone'],
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['complemento'],
        $_POST['cep'],
        $_POST['pontoReferencia']
    );

    /*$cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $pontoReferencia = $_POST['pontoReferencia'];*/




//----------------------------------------------AREA DE TESTE E DEBUG-------------------------------------------------
var_dump(
    $pessoa
);



//----------------------------------------------COMPLEMENTO PARA CADASTRO DE FUNCIONÁRIO-------------------------------------------------
//$admissao = $_POST['admissao'];
//$matricula = $_POST['matricula'];
//$funcao = $_POST['funcao'];


//----------------------------------------------CADASTRO DE PRODUTOS-------------------------------------------------


//$id_produto = $_POST['id_produto'];
//$quantidade = $_POST['quantidade'];
//$message = $_POST['message'];

?>
=======
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua']; 
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];
$cep = $_POST['cep'];
$pontoReferencia = $_POST['pontoReferencia'];
/*var_dump($cpf,
$nome,
$email,
$telefone ,
$rua  ,
$bairro ,
$cidade ,
$complemento,
$cep ,
$pontoReferencia );
*/
?>
>>>>>>> 8caf8a7bcdff56d5d7807db718e65d4e538374ae
