<?php

/* CONEXAO 01
    class Banco{
        public $pdo;

        
            //--------------------------------------------CONEXAO COM O BANCO DE DADOS----------------------------------------------
            public function __construct($dbname, $host, $user, $senha)
            {
                try {
                    $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha,
                        [
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                            PDO::ATTR_CASE => PDO::CASE_NATURAL
                        ]);
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                   
                    //echo "Banco de dados conectado com sucesso";
        

                } catch (PDOException $e) {
                    echo "Erro com banco de dados: {$e->getMessage()}";
        
                    exit();
                } catch (Exception $e) {
                    echo "Erro generico: {$e->getMessage()}";
                }
           } 
     }



  $pdo = new Banco("retro_db", "localhost", "yuri", "7q5eb6eb@#");

 */

 //CONEXAO 02

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=db_retro",
            "yuri",
            "7q5eb6eb@#",
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]);
        $pdo->setAttribute(   PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //dbname = nome do banco dedados
        //host = endereço do servidor
        //username = usuario
        //senha
    }catch(PDOException $e){
        echo "Erro com banco de dados: {$e->getMessage()}";

    }catch(Exception $e){
        echo "Erro generico: {$e->getMessage()}";
    }
    