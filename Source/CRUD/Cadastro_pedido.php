<?php
      require_once '../BD/Databases.php';

      $nome1 = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
      // --------------------------------ALMOCO---------------------------------------------
      if(isset($_POST['produto1_id']) and isset($_POST['quantidade1'])){
            $produto1_id =  filter_input(INPUT_POST,'produto1_id',FILTER_SANITIZE_NUMBER_INT);
            $quantidade1 = filter_input(INPUT_POST,'quantidade1', FILTER_SANITIZE_NUMBER_INT);

            $sql_produto1 = "SELECT produto_id, valor, nome FROM produto WHERE produto_id = :p  ";
            $resp_produto1 = $pdo -> prepare($sql_produto1);
            $resp_produto1 -> bindValue(":p", $produto1_id);
            $resp_produto1 -> execute();
            $row = $resp_produto1 -> fetch();
            $produto1 =  $row['produto_id'];
            $valor1 = $row['valor'];
            $nome1 = $row['nome'];
           
            

            var_dump(
                 $produto1,
                 $quantidade1,
                 $produto1,
                 $valor1,
                 $nome1
            );
 


      }
      // -----------------------------CAFE DA MANHA---------------------------------------------
      if(isset($_POST['produto2_id'])>0 && isset($_POST['quantidade2'])){
            $produto2_id =  filter_input(INPUT_POST,'produto2_id', FILTER_SANITIZE_STRING);
            $quantidade2 = filter_input(INPUT_POST,'quantidade2', FILTER_SANITIZE_STRING);

            $sql_produto2 = "SELECT produto_id, valor, nome FROM produto WHERE produto_id = :p  ";
            $resp_produto2 = $pdo -> prepare($sql_produto2);
            $resp_produto2 -> bindValue(":p", $produto2_id);
            $resp_produto2 -> execute();
            $row = $resp_produto2 -> fetch();
            $produto2 =  $row['produto_id'];
            $valor2 = $row['valor'];
            $nome2 = $row['nome'];

            var_dump(
                  $produto2_id,
                  $quantidade2,
                  $produto2,
                  $valor2,
                  $nome2
             );
  
      }
      // --------------------------------JANTA---------------------------------------------
      if(isset($_POST['produto3_id'])>=1 && isset($_POST['quantidade3'])){
            $produto3_id =  filter_input(INPUT_POST,'produto3_id', FILTER_SANITIZE_STRING);
            $quantidade3 = filter_input(INPUT_POST,'quantidade3', FILTER_SANITIZE_STRING);

            $sql_produto3 = "SELECT produto_id, valor, nome FROM produto WHERE produto_id = :p  ";
            $resp_produto3 = $pdo -> prepare($sql_produto3);
            $resp_produto3 -> bindValue(":p", $produto3_id);
            $resp_produto3 -> execute();
            $row = $resp_produto3 -> fetch();
            $produto3 =  $row['produto_id'];
            $valor3 = $row['valor'];
            $nome3 = $row['nome'];


            var_dump(
                  $produto3_id,
                  $quantidade3,
                  $produto3,
                  $valor3,
                  $nome3
             );
      }

/*
      var_dump(
            $nome1,
            $email,      
            $produto1_id,
            $quantidade1,
            $produto2_id, 
            $quantidade2,
            $produto3_id,
            $quantidade3
      );


      $sql_produto1 = "SELECT produto_id, nome, valor FROM produtos  ";
      /*
        
      //---------------------------------------VERIFICANDO CLIENTE E E-MAIL---------------------------------------------------------
      $sql_func_email = 'SELECT clie_id, email FROM cliente WHERE email = :e';
      
      $resp_f = $pdo -> prepare($sql_func_email);
      $resp_f->bindValue(":e", $email);
      $resp_f->execute();
      $row = $resp_f->fetch();
      $cad_email = $row['email'];
      $cad_cliente = $row['clie_id'];
      
      //-----------------------------------------CADASTRANDO PEDIDO------------------------------------------------------------------
      if($cad_email && $cad_cliente){
            $data_pedido = date('d/m/y');

            $total = 0;
            $quantidade = 0;
           



            $sql_func_pedido("INSERT INTO pedido(clie_id, func_id, data_pedido, total, quantidade, produto_id) VALUES (:cl, :f, :d, :t, :q, :p)");
            

            
            $cad_pedido = $pdo->prepare($sql_func_pedido);
            $cad_pedido->bindValue(":cl", $cad_cliente);
            $cad_pedido->bindValue(":f", '1');
            $cad_pedido->bindValue(":d", $data_pedido);
            $cad_pedido->bindValue(":t", $total);
            $cad_pedido->bindValue("q", $quantidade);
            $cad_pedido->bindValue(":p", $produto1_id);
            $cad_pedido->bindValue(":p", $produto2_id);
            $cad_pedido->bindValue(":p", $produto3_id);

            $cad_pedido->execute();
      }else{
            header('Location: ../../bistro/cadastro.php ');
      }

	var_dump(
		$produto_id,
		$quantidade

	);

     

               
  