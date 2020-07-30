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


    
}