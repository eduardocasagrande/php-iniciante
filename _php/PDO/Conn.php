<?php

class Conn implements IConn
{

    private $host;
    private $dbname;
    private $user;
    private $pass;

    public function  __construct($host,$dbname,$user,$pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function conexao()
    {
        try {
           return new \PDO(
               "mysql:host={$this->host};dbname={$this->dbname}",
               $this->user,
               $this->pass
           );

        } catch (\PDOException $e) {
            echo "Ops! Ocorreu um problema inesperado..." . "<br> Message: " . $e->getMessage() . "<br> Code: " . $e->getCode();
            exit;
        }

    }
}