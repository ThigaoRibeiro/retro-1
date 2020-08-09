<?php
    require_once("Databases.php");
    

    //-----------------------------INSERINDO COMANDO SQL A UMA VARIAVEL ------------------------------
    try{     

         //----------------------CADASTRO NOME E EMAIL DO FUNCIONARIO------------------------------------------
        
         
         $sql_func ="INSERT INTO cliente(nome, email, cpf) VALUES (:n,:e,:c)";
 
            $resp_f = $pdo->prepare($sql_func); 
            $nome = "Junior do Carlos";
            $email = "junior.carlos@gmail.com.br";
            $cpf = "15698571865";
            $resp_f->bindValue(":n", $nome);
            $resp_f->bindValue(":e", $email);
            $resp_f->bindValue(":c", $cpf);
            $resp_f->execute();

        //------------------------PEGANDO O ULTIMO ID INSERIDO----------------------------------------
        
         $sql = "SELECT * FROM cliente ORDER BY clie_id DESC";
            $sql = $pdo->query($sql);
            $row = $sql->fetch();
            $ultimo_id =$row['clie_id'];
        
       

        
        //-------------------------CADASTRO ENDERECO FUNCIONARIO -------------------------------------
           
        $rua = "Rua Augusto Braga";
        $complemento = "casa";
        $bairro = "Madureira";
        $cidade = "Rio de Janeiro";
        $cep = "21258782";
        $referencia = "Perto do Posto Shell";
       
        $sql_func_endereco="INSERT INTO  clie_endereco (clie_id, rua,  complemento, bairro, cidade, cep, referencia)
        VALUES(?,?,?,?,?,?,?)";

           
        $pdo->prepare($sql_func_endereco)->execute([$ultimo_id, $rua, $complemento, $bairro, $cidade, $cep, $referencia]);
       

        //------------------------CADASTRO TELEFONE FUNCIONARIO---------------------------------------
        $telefone = "021952695489";
        $sql_func_telefone="INSERT INTO  clie_telefone (clie_id, tel_01)
        VALUES(?,?)";

        $pdo->prepare($sql_func_telefone)->execute([$ultimo_id, $telefone]);

      
            //-----------------------------------MENSAGEM DE ERRO --------------------------------------------
    }catch(PDOException $erro){
        var_dump($erro);
    }


   