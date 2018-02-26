<?php

class ServiceProduto
{
    private $db;
    private $produto;

    public function __construct(IConn $db, IProduto $produto)
    {
        $this->db = $db->conexao();
        $this->produto = $produto;
    }

    public function get()
    {

    }

    public function post()
    {

    }

    public function put()
    {

    }

    public function delete()
    {

    }

}