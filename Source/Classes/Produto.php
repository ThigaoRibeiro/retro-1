<?php


namespace Source\Classes;


class Produto
{
protected $id_produto;
protected $valor_produto;

    /**
     * Produto constructor.
     * @param $id_produto
     * @param $valor_produto
     */
    public function __construct($id_produto, $valor_produto)
    {
        $this->id_produto = $id_produto;
        $this->valor_produto = $valor_produto;
    }


    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @return mixed
     */
    public function getValorProduto()
    {
        return $this->valor_produto;
    }


}