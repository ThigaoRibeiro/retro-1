<?php

require __DIR__."/Source/Classes/Pessoa.php";
//require __DIR__."/Source/Classes/Endereço.php";
//require __DIR__."/Source/Classes/Funcionario.php";
//require __DIR__."/Source/Classes/Cliente.php";
//require __DIR__."/Source/Classes/Produto.php";
//require __DIR__."/CRUD/insert/";


//----------------------------------------------CADASTRO DE FUNCIONÁRIO-------------------------------------------------

    $pessoa = new Source\Classes\Pessoa(
        $pessoa = $_POST['cpf'];
        $pessoa = $_POST['nome'];
        $pessoa = $_POST['email'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];
        $cep = $_POST['cep'];
        $pontoReferencia = $_POST['pontoReferencia'];
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
    /*$cpf,
    $nome,
    $email,
    $telefone,
    $rua,
    $bairro,
    $cidade,
    $complemento, 
    $cep,  
    $pontoReferencia*/


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
