<?php





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


    protected $pontoReferencia;
    protected $admissao;
    protected $matricula;
    protected $funcao;

    /**
     * Pessoa constructor.
     * @param $cpf
     * @param $nome
     * @param $email
     * @param $telefone
     * @param Endereco $endereco
     * @param $pontoReferencia
     */
    public function __construct($cpf, $nome, $email, $telefone, Endereco $endereco, $pontoReferencia)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->pontoReferencia = $pontoReferencia;
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
    public function getEmail()
    {
        return $this->email;
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
    public function getPontoReferencia()
    {
        return $this->pontoReferencia;
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


}



