<?php

class Conexao implements IConexao{

    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn,$user,$pass){
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function conexao(){
        return new \PDO($this->dsn,$this->user,$this->pass);


    }

}