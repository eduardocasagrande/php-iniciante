<?php

abstract class IDao
{
    protected $conexao;

    protected $tabela;

    public function __construct(IConn $db)
    {
        $this->conexao =  $db->conexao();
    }

    public function get()
    {
        return "ok";
    }

    public function insert()
    {

    }

    public function put()
    {

    }

    public function delete()
    {

    }
}