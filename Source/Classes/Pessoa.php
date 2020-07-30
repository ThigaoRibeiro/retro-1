<?php


namespace Source\Classes;


class Pessoa
{
    protected $cpf;
    protected $id_cliente;           /*BD -> id_cliente*/
    protected $nome;                 /*BD -> nome*/
    protected $email;
    protected $telefone;            /*BD -> telefone*/

    /**
     * @var Endereco
     */
    protected $endereco;



    protected $admissao;
    protected $matricula;
    protected $funcao;

    /**
     * Pessoa constructor.
     * @param $cpf
     * @param $id_cliente
     * @param $nome
     * @param $telefone
     * @param Endereco $endereco
     * @param $admissao
     * @param $matricula
     * @param $funcao
     */
    public function __construct($cpf, $id_cliente, $nome, $telefone, Endereco $endereco, $admissao, $matricula, $funcao)
    {
        $this->cpf = $cpf;
        $this->id_cliente = $id_cliente;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->admissao = $admissao;
        $this->matricula = $matricula;
        $this->funcao = $funcao;
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
    public function getIdCliente()
    {
        return $this->id_cliente;
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

    /**
     * @return mixed
     */
    public function getAdmissao()
    {
        return $this->admissao;
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @return mixed
     */
    public function getFuncao()
    {
        return $this->funcao;
    }
 
    public function getEmail()
    {
        return $this->email;
    }
}


