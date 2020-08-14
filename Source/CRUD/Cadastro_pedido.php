<?php
      require_once '../BD/Databases.php';

      $nome1 = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        
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
            $cad_pedido->bindValue(":p", $produto_id);

            $cad_pedido->execute();
      }else{
            header('Location: ../../bistro/cadastro.php ');
      }



     

               
  