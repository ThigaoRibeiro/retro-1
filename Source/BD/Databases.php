<?php
    require "../vendor/autoload.php";
    //--------------------- Conexão com banco de dados

    class Banco{
        private $pdo;

        
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



  $conn = new Banco("retro_db", "localhost", "yuri", "7q5eb6eb@#");