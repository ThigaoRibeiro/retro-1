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


    public  function  bootstrap()
    {

    }

    public function loadCliente(int $id, string $columns = "*")
    {
        $load = $this->read("SELECT {$columns} FROM " . self::$cliente . " WHERE clie_id = :id ", "id={$id}");
        var_dump(
            $load->fetch(),
            //$this->fail(),
            $load->rowCount()

        );
    }

    public  function find($email)
    {

    }

    public  function all($limit = 30, $offset =0)
    {

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