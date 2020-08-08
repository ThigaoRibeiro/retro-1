<?php

require __DIR__."/Source/Classes/Pessoa";
require __DIR__."/Source/Classes/Endereço";
require __DIR__."/Source/Classes/Funcionario";
require __DIR__."/Source/Classes/Cliente";
require __DIR__."/Source/Classes/Produto";
require __DIR__."/CRUD/insert/";


//----------------------------------------------CADASTRO DE FUNCIONÁRIO-------------------------------------------------
$cpf = addslashes(INPUT_POST,['cpf']);
$nome = addslashes(INPUT_POST, ['nome']);
$email = filter_var(FILTER_VALIDATE_EMAIL, ['email']);
$telefone = addslashes(INPUT_POST,['telefone']);
$rua = addslashes(INPUT_POST,['rua']); 
$bairro = addslashes(INPUT_POST,['bairro']);
$cidade = addslashes(INPUT_POST,['cidade']);
$complemento = addslashes(INPUT_POST,['complemento']);
$cep = addslashes(INPUT_POST,['cep']);
$pontoReferencia = addslashes(INPUT_POST,['pontoReferencia']);


//----------------------------------------------COMPLEMENTO PARA CADASTRO DE FUNCIONÁRIO-------------------------------------------------
$admissao = addslashes(INPUT_POST,['admissao']);
$matricula = addslashes(INPUT_POST,['matricula']);
$funcao = addslashes(INPUT_POST,['funcao']);


//----------------------------------------------CADASTRO DE PRODUTOS-------------------------------------------------


$id_produto = $_POST[''];
$valor_produto = $_POST[''];
?>