<?php

require_once("VeiculoIndex3.php");

class MotoIndex3 extends VeiculoIndex3
{
    public function __construct($marca = null, $cor = null, $motor = null)
    {
        parent::__construct(strtoupper($marca), $cor, $motor);
    }
}