<?php

require_once '../BD/Databases.php';

$nome1 = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
// --------------------------------ALMOCO---------------------------------------------
if(isset($_POST['produto1_id']) and isset($_POST['quantidade1'])){
      $produto1_id =  filter_input(INPUT_POST,'produto1_id',FILTER_SANITIZE_NUMBER_INT);
      $quantidade1 = filter_input(INPUT_POST,'quantidade1', FILTER_SANITIZE_NUMBER_INT);

      $sql_produto1 = "SELECT produto_id FROM produto WHERE produto_id = :p  ";
      $produto1 = $pdo -> prepare($sql_produto1);
      $produto1 -> bindValue(":p", $produto1_id);
      $produto1 -> execute();
      $row = $produto1->fetch();
      //$valor1 -> $row['valor'];
      $produto-> $row['produto_id'];
      //$produto1_nome -> $row['nome'];


     
      

      var_dump(
           $produto1_id,
           $quantidade1,
           $produto['produto_id']
      );
