<?php

namespace Source\CRUD\Models;
use Source\Database\Connect;


class  UserAddress extends Model{

    /**
     * @var array safe  no create or update
     */

    public static $safe = ["clie_id", "endereco_id"];

    /**
     * @var string $clie_endereco  database table
     */

    public static $clie_endereco = "clie_endereco";

    public function  bootstrap($clie_id, $clie_endereco, $rua, $bairro, $cidade, $cep, $referencia){

        $this->clie_id = $clie_id;
        $this->clie_endereco = $clie_endereco;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->referencia = $referencia;
    }

    /**
     * @param int $id
     * @param string $columns
     * @return mixed|null
     */

    public  function  loadEndereco(int $clie_id, string $columns = "*"){

        $load = $this->read("SELECT {$columns} FROM " . self::$clie_endereco . " WHERE clie_id = :clie_id", "clie_id={$clie_id}");
        if($this->fail() || !$load->rowCount()){
            $this->message = "Endereço não encontrado";
            return null;
        }
        return $load->fetchObject(__CLASS__);
    }



}