<?php

require_once __DIR__."/Source/Classes/Pessoa";
require_once __DIR__."/Source/Classes/Endereço";
require_once __DIR__."/Source/Classes/Funcionario";
require_once __DIR__."/Source/Classes/Cliente";

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

$admissao = addslashes(INPUT_POST,['admissao']);
$matricula = addslashes(INPUT_POST,['matricula']);
$funcao = addslashes(INPUT_POST,['funcao']);




?>