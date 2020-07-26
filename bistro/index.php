<?php

require_once __DIR__."/Source/Classes/Pessoa";
require_once __DIR__."/Source/Classes/Endereço";
require_once __DIR__."/Source/Classes/";
require_once __DIR__."/Source/Classes/Pessoa";

$nome = addslashes(INPUT_POST, ['nome']);
$cpf = addslashes(INPUT_POST,['cpf']);
$email = filter_var(FILTER_VALIDATE_EMAIL, ['email']);
$telefone = addslashes(INPUT_POST,['telefone']);
$rua = addslashes(INPUT_POST,['rua']); 
$complemento = addslashes(INPUT_POST,['complemento']);
$bairro = addslashes(INPUT_POST,['bairro']);
$cidade = addslashes(INPUT_POST,['cidade']);
$cep = addslashes(INPUT_POST,['cep']);
$pontoReferencia = addslashes(INPUT_POST,['pontoReferencia']);






?>