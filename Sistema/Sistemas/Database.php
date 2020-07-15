<?php
    class Databases{
        private $pdo;

        //Conexao com banco de dados

        public function __construct($dbname, $host, $user, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha,
                [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_CASE => PDO::CASE_NATURAL
                ]);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          
        } catch (PDOException $erro) {
            echo "Erro com banco de dados: {$erro->getMessage()}";

            exit();
        } catch (Exception $e) {
            echo "Erro generico: {$e->getMessage()}";
        }
    }
}