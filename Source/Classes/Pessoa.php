<?php


namespace Source\Classes;


class Pessoa
{
    protected $cpf;
    protected $nome;                 /*BD -> nome*/
    protected $email;
    protected $telefone;            /*BD -> telefone*/

    /**
     * @var Endereco
     */
    protected $endereco;


    /**
     * Pessoa constructor.
     * @param $cpf
     * @param $id_cliente
     * @param $nome
     * @param $telefone
     * @param Endereco $endereco
     */
    public function __construct($cpf,$nome,$telefone, Endereco $endereco)
    {
        $this->cpf = filter_var($cpf, FILTER_SANITIZE_STRIPPED);
        $this->nome = filter_var($nome, FILTER_SANITIZE_STRIPPED);
        $this->telefone = filter_var($telefone, FILTER_SANITIZE_STRIPPED);
        $this->endereco = filter_var($endereco, FILTER_SANITIZE_STRIPPED);        
    }

    public function setEmail ($email)
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return Endereco
     */
    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

 
    public function getEmail()
    {
        return $this->email;
    }
}


