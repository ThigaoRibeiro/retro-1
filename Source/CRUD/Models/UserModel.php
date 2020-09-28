<?php

namespace Source\CRUD\Models;
use Source\Database\Connect;

class UserModel extends Model
{
    /**
     * @var array $safe no create or update
     */

    protected static $safe = ["id", "endereco_id", "telefone_id"];

    /**
     * @var string $cliente database table
     */
    protected  static  $cliente = "cliente";

    /**
     * @var string $clie_telefone database table
     */
    protected  static  $clie_telefone  = "clie_telefone ";


    /**
     * @var string $clie_endereco database table
     */
    protected  static  $clie_endereco  = "clie_endereco ";


    public  function  bootstrap(string $name, string $email, string $cpf)
    {
        
    }

    public function loadCliente(int $id, string $columns = "*"): ?\Source\CRUD\Models\UserModel
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$cliente . " WHERE clie_id = :id ", "id={$id}");
        if($this->fail() || !$load->rowCount()){
            $this->message = "Usuário não encontrado para o id informado.";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    
    }

    public  function find($email, $columns = "*")
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$cliente . " WHERE email = :email ", "email={$email}");
        if($this->fail() || !$find->rowCount()){
            $this->message = "Usuário não encontrado para email informado.";
            return null;
        }
        return $find->fetchObject(__CLASS__);
    
    }

    public  function all(int $limit = 30, int $offset =0, string $columns= "*")
    {
        $all = $this->read("SELECT {$columns} FROM " . self::$cliente . " LIMIT :l OFFSET :o  ", "l={$limit}&o={$offset}");
        if($this->fail() || !$all->rowCount()){
            $this->message = "Sua consulta não retornou nenhum usuário.";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
    
    }

    public  function save()
    {

    }

    public  function destroy()
    {

    }

    private function required()
    {

    }



}