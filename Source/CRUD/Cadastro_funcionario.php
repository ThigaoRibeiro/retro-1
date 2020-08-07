<?php
    require_once("Databases.php");
    //-----------------------------INSERINDO COMANDO SQL A UMA VARIAVEL ------------------------------
    try{
        
       //----------------------CADASTRO NOME DO FUNCIONARIO-------------------------------------------
        $sql_func ="INSERT INTO funcionario(nome) VALUES (:f)";
        $resp_f = $pdo->prepare($sql_func); 
        $nome = "Yuri do Monte";
        $resp_f->bindValue(":f", $nome);
        $resp_f->execute();

        //------------------------CADASTRO TELEFONE FUNCIONARIO---------------------------------------
        $sql_func_tel = "INSERT INTO funcionario_telefone(tel_01, tel_02) VALUES (:t1, :t2)";
        $resp_tel = $pdo->prepare($sql_func_tel);
        $tel1= "2133548925";
        $tel2= "21982654893";
        $resp_tel->bindValue(":t1",$tel1,);
        $resp_tel->bindValue(":t2",$tel2); 
        $resp_tel->execute();
        
        //-------------------------CADASTRO ENDERECO FUNCIONARIO -------------------------------------
        
        $sql_func_endereco="INSERT INTO funcionario_endereco (endereco_rua, endereco_bairro,
        endereco_cidade, endereco_complemento, endereco_cep, endereco_ponto_referencia)
        VALUES(:r, :b, :c, :co, :cp, :pr)";

        $resp_endereco = $pdo->prepare($sql_func_endereco);
        $rua = "Rua 5 de agosto";
        $bairro = "Vista Alegre";
        $cidade = "Rio de Janeiro";
        $compl = "Casa";
        $cep = "215689500";
        $pontr = "Perto do posto Shell";

        $resp_endereco->bindValue(":r",$rua);
        $resp_endereco->bindValue(":b",$bairro);
        $resp_endereco->bindValue(":c",$cidade);
        $resp_endereco->bindValue(":co",$compl);
        $resp_endereco->bindValue(":cp",$cep);
        $resp_endereco->bindValue(":pr",$pontr);
        $resp_endereco->execute();


           
       
            //-----------------------------------MENSAGEM DE ERRO --------------------------------------------
    }catch(PDOException $erro){
        var_dump($erro);
    }



