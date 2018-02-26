<?php


class Produto
{
    private $idProd;
    private $descricao;
    private $valor;

    public function getIdProd()
    {
        return $this->idProd;
    }

    public function setIdProd($idProd)
    {
        $this->idProd = $idProd;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }


}