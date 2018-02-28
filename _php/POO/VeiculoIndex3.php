<?php

require_once ("IVeiculo.php");

abstract class VeiculoIndex3 implements IVeiculo {

    private $marca;
    private $cor;
    private $motor;

    public function __construct($marca,$cor,$motor){
        $this->marca = $marca;
        $this->cor = $cor;
        $this->motor = $motor;
    }

    public function dados(){
        return "Marca: ".$this->marca."\n"."Cor: ".$this->cor."\n"."Motor: ".$this->motor." cavalos de potencia\n";
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
}