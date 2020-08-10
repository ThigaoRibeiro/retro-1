<?php
    session_start();
    require "Databases.php";
    require "cadastro.php";
    
  




    //-----------------------------INSERINDO COMANDO SQL A UMA VARIAVEL ------------------------------
    try{     
        
         //----------------------CADASTRO NOME E EMAIL DO FUNCIONARIO------------------------------------------
         $cadastro = filter_input(INPUT_POST , 'cadastro', FILTER_SANITIZE_STRING);
         if($cadastro){


         }else{
             $_SESSION['msg'] = "<p style= 'color: red;'>MENSAGEM NÃO FOI ENVIADA COM SUCESSO</p>";
             header("Location: cadastro.php");
         }

          $nome1 = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
          $email1 = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
          $cpf1 = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
         
          $sql_func ="INSERT INTO cliente(nome, email, cpf) VALUES (?,?,?,)";
 
            $resp_f = $pdo->prepare($sql_func); 
            //$nome1 =$_POST['nome'];
            //$email1 =$_POST['email'];
            //$cpf1 =  $_POST['cpf'];
            
            $pdo->prepare($sql_func)->execute([$nome1, $email1, $cpf1]);
        //------------------------PEGANDO O ULTIMO ID INSERIDO----------------------------------------
        
         $sql = "SELECT * FROM cliente ORDER BY clie_id DESC";
            $sql = $pdo->query($sql);
            $row = $sql->fetch();
            $ultimo_id =$row['clie_id'];     
        
        //-------------------------CADASTRO ENDERECO CLIENTE -------------------------------------
          
        $rua1 = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $complemento1 = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
        $bairro1 = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
        $cidade1 = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
        $referencia1 =  filter_input(INPUT_POST, 'pontoReferencia', FILTER_SANITIZE_STRING);
        $cep1 = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
        
        //$rua1 = $_POST['rua'];
        //$complemento1 = $_POST['complemento'];
        //$bairro1 = $_POST['bairro'];
        //$cidade1 = $_POST['cidade'];
        //$cep1 = $_POST['cep'];
        //$referencia1 = $_POST['pontoReferencia'];
       
        $sql_func_endereco="INSERT INTO  clie_endereco (clie_id, rua,  complemento, bairro, cidade, cep, referencia)
        VALUES(?,?,?,?,?,?,?)";

           
        $pdo->prepare($sql_func_endereco)->execute([$ultimo_id, $rua1, $complemento1, $bairro1, $cidade1, $cep1, $referencia1]);
       

        //------------------------CADASTRO TELEFONE FUNCIONARIO---------------------------------------
        $telefone1 = $_POST['telefone'];
        $sql_func_telefone="INSERT INTO  clie_telefone (clie_id, tel_01)
        VALUES(?,?)";

        $pdo->prepare($sql_func_telefone)->execute([$ultimo_id, $telefone1]);


 

      
            //-----------------------------------MENSAGEM DE ERRO --------------------------------------------
    }catch(PDOException $erro){
        var_dump($erro);
    }catch(Exception $execption){
        var_dump($execption);
    }


   