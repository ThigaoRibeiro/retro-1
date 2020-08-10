<?php

//require __DIR__.'../../Source/Classes/Pessoa.php';
//require __DIR__."/Source/Classes/Endereço.php";
//require __DIR__."/Source/Classes/Funcionario.php";
//require __DIR__."/Source/Classes/Cliente.php";
//require __DIR__."/Source/Classes/Produto.php";
//require __DIR__."/CRUD/insert/";


//----------------------------------------------CADASTRO DE CLIENTE-------------------------------------------------

//$cliente = new Pessoa($cpf, $nome, $email, $telefone);

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
var_dump($cpf,
$nome,
$email,
$telefone ,
$rua  ,
$bairro ,
$cidade ,
$complemento,
$cep ,
$pontoReferencia );

?>