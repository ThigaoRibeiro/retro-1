<?php





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


<<<<<<< HEAD
=======
    protected $pontoReferencia;
    protected $admissao;
    protected $matricula;
    protected $funcao;

>>>>>>> 8caf8a7bcdff56d5d7807db718e65d4e538374ae
    /**
     * Pessoa constructor.
     * @param $cpf
     * @param $nome
     * @param $email
     * @param $telefone
     * @param Endereco $endereco
<<<<<<< HEAD
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
=======
     * @param $pontoReferencia
     */
    public function __construct($cpf, $nome, $email, $telefone)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
>>>>>>> 8caf8a7bcdff56d5d7807db718e65d4e538374ae
        $this->email = $email;
        $this->telefone = $telefone;
        //$this->endereco = $endereco;
       // $this->pontoReferencia = $pontoReferencia;
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

<<<<<<< HEAD
 
    public function getEmail()
    {
        return $this->email;
    }
=======
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


>>>>>>> 8caf8a7bcdff56d5d7807db718e65d4e538374ae
}



