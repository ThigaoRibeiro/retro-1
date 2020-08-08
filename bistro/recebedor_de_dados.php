<?php

//require __DIR__."/Source/Classes/Pessoa";
//require __DIR__."/Source/Classes/Endereço";
//require __DIR__."/Source/Classes/Funcionario";
//require __DIR__."/Source/Classes/Cliente";
//require __DIR__."/Source/Classes/Produto";
//require __DIR__."/CRUD/insert/";


//----------------------------------------------CADASTRO DE FUNCIONÁRIO-------------------------------------------------

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


//----------------------------------------------COMPLEMENTO PARA CADASTRO DE FUNCIONÁRIO-------------------------------------------------
//$admissao = $_POST['admissao'];
//$matricula = $_POST['matricula'];
//$funcao = $_POST['funcao'];


//----------------------------------------------CADASTRO DE PRODUTOS-------------------------------------------------


$id_produto = $_POST['id_produto'];
$quantidade = $_POST['quantidade'];
$message = $_POST['message'];

//----------------------------------------------AREA DE TESTE E DEBUG-------------------------------------------------

var_dump(
 $cpf .PHP_EOL,
 $nome .PHP_EOL,
 $email .PHP_EOL,
 $telefone .PHP_EOL,
 $rua .PHP_EOL,
 $bairro .PHP_EOL,
 $cidade .PHP_EOL,
 $complemento .PHP_EOL,
 $cep .PHP_EOL,
 $pontoReferencia .PHP_EOL
);

?>