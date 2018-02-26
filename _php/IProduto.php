<?php

interface IProduto
{
    public function getIdProd();
    public function setIdProd($idProd);
    public function getDescricao();
    public function setDescricao($descricao);
    public function getValor();
    public function setValor($valor);
}