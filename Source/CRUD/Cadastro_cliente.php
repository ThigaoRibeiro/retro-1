<?php
    require __DIR__ ."/Source/BD/Databases.php";
    require_once __DIR__.'/bistro/recebedor_de_dados.php';

  




    //-----------------------------INSERINDO COMANDO SQL A UMA VARIAVEL ------------------------------
    try{     

         //----------------------CADASTRO NOME E EMAIL DO FUNCIONARIO------------------------------------------
        
         
         $sql_func ="INSERT INTO cliente(nome, email, cpf) VALUES (:n,:e,:c)";
 
            $resp_f = $pdo->prepare($sql_func); 
            $nome1 = $nome;
            $email1 = $email;
            $cpf1 = $cpf;
            $resp_f->bindValue(":n", $nome1);
            $resp_f->bindValue(":e", $email1);
            $resp_f->bindValue(":c", $cpf1);
            $resp_f->execute();

        //------------------------PEGANDO O ULTIMO ID INSERIDO----------------------------------------
        
         $sql = "SELECT * FROM cliente ORDER BY clie_id DESC";
            $sql = $pdo->query($sql);
            $row = $sql->fetch();
            $ultimo_id =$row['clie_id'];     
        
        //-------------------------CADASTRO ENDERECO CLIENTE -------------------------------------
           
        $rua1 = $rua;
        $complemento1 = $complemento;
        $bairro1 = $bairro;
        $cidade1 = $cidade;
        $cep1 = $cep;
        $referencia1 = $pontoReferencia;
       
        $sql_func_endereco="INSERT INTO  clie_endereco (clie_id, rua,  complemento, bairro, cidade, cep, referencia)
        VALUES(?,?,?,?,?,?,?)";

           
        $pdo->prepare($sql_func_endereco)->execute([$ultimo_id, $rua1, $complemento1, $bairro1, $cidade1, $cep1, $referencia1]);
       

        //------------------------CADASTRO TELEFONE FUNCIONARIO---------------------------------------
        $telefone1 = $telefone;
        $sql_func_telefone="INSERT INTO  clie_telefone (clie_id, tel_01)
        VALUES(?,?)";

        $pdo->prepare($sql_func_telefone)->execute([$ultimo_id, $telefone1]);

      
            //-----------------------------------MENSAGEM DE ERRO --------------------------------------------
    }catch(PDOException $erro){
        var_dump($erro);
    }


   