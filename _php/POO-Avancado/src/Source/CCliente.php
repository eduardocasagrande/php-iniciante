<?php
class Cliente{

    private $db;

    public function __construct(IConexao $db){
        $this->db = $db->conexao();
    }


    public function listarDados(){

        $query = "SELECT * FROM cliente";

        $commit = $this->db->prepare($query);

        $commit->execute();

        return $commit->fetchAll(\PDO::FETCH_ASSOC);
    }

}