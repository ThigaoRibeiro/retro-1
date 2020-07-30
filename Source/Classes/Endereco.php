<?php


namespace Source\Classes;


class Endereco
{
    protected $rua; /*BD -> endereço*/
    protected $bairro;
    protected $cidade;
    protected $complemento;
    protected $cep;
    protected $pontoReferencia;

    /**
     * Endereco constructor.
     * @param $rua
     * @param $complemento
     * @param $bairro
     * @param $cidade
     * @param $cep
     * @param $pontoReferencia
     */
    public function __construct($rua, $complemento, $bairro, $cidade, $cep, $pontoReferencia)
    {
        $this->rua = filter_var($rua, FILTER_SANITIZE_STRIPPED);
        $this->complemento = filter_var($complemento, FILTER_SANITIZE_STRIPPED);
        $this->bairro = filter_var($bairro, FILTER_SANITIZE_STRIPPED);
        $this->cidade = filter_var ($cidade, FILTER_SANITIZE_STRIPPED);
        $this->cep = filter_var ($cep, FILTER_SANITIZE_STRIPPED);
        $this->pontoReferencia = filter_var($$pontoReferencia, FILTER_SANITIZE_STRIPPED);
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @return mixed
     */
    public function getPontoReferencia()
    {
        return $this->pontoReferencia;
    }


}