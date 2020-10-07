<?php

namespace Source\CRUD\Models;
use Source\Database\Connect;

class UserModel extends Model
{
    /**
     * @var array $safe no create or update
     */

    protected static $safe = ["id"];

    /**
     * @var string $cliente database table
     */
    protected  static  $cliente = "cliente";



    public  function  bootstrap(string $nome, string $email, string $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;  
        return $this; 
    }

    /**
     * @param int $id
     * @param string $columns
     * @return mixed|null
     */
    public function loadCliente(int $id, string $columns = "*")
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$cliente . " WHERE clie_id = :id ", "id={$id}");
        if($this->fail() || !$load->rowCount()){
            $this->message = "Usuário não encontrado para o id informado.";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    
    }

    /**
     * @param $email
     * @param string $columns
     * @return mixed|null
     */
    public  function find($email, $columns = "*")
    {
        $find = $this->read("SELECT {$columns} FROM " . self::$cliente . " WHERE email = :email ", "email={$email}");
        if($this->fail() || !$find->rowCount()){
            $this->message = "Usuário não encontrado para email informado.";
            return null;
        }
        return $find->fetchObject(__CLASS__);
    
    }

    /**
     * @param int $limit
     * @param int $offset
     * @param string $columns
     * @return array|null
     */
    public  function all(int $limit = 30, int $offset = 0, string $columns= "*")
    {
        $all = $this->read("SELECT {$columns} FROM " . self::$cliente . " LIMIT :l OFFSET :o  ", "l={$limit}&o={$offset}");
        if($this->fail() || !$all->rowCount()){
            $this->message = "Sua consulta não retornou nenhum usuário.";
            return null;
        }
        return $all->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
    
    }

    /**
     * @return $this|null
     */
    public  function save()
    {
        /**  Client Update          */
       if(!empty($this->id)){
            $userId = $this->id;
       }

        /**  Client Create       */
       if(empty($this->id)){
            if($this->find($this->email)){
                $this->message = "O e-mail informado já foi cadastrado";
                return null;
            }
            $userId = $this->create(self::$cliente, $this->safe());
            if($this->fail()){
                $this->message = "Erro ao cadastrar, verifique os dados";
            }
            $this->message = "Cadastro realizado com sucesso";
       }
       $this->data = $this->read("SELECT * FROM cliente WHERE clie_id =:id", "id={$userId}")->fetch();
       return  $this;
    }

    public  function destroy()
    {

    }

    protected function required()
    {

    }



}