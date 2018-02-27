<?php

abstract class IDao
{
    protected $conexao;

    protected $tabela;

    public function __construct(IConn $db)
    {
        $this->conexao = $db->conexao();
    }

    public function fetchAll($condicao = null)
    {
        $where = "";
        if(!is_null($condicao)){
            $where .= "WHERE {$condicao}";
        }
        $query = "SELECT * FROM {$this->tabela} {$where}";
        $dados = $this->conexao->prepare($query);
        $dados->execute();
        $registros = $dados->fetchAll();
        if(empty($registros)){
            return null;
        }
        return $registros;
    }

    public function fetch($condicao = null)
    {
        $registros = $this->fetchAll($condicao);
        if ($registros){
            return $registros[0];
        }
        return null;
    }

    public function insert(array $dados)
    {
        $colunas = "";
        $valores = "";
        foreach ($dados as $column => $dado) {
            $colunas .= $column . ',';
            $valores .= "'{$dado}',";
        }
        $colunas = substr($colunas, 0, -1);
        $valores = substr($valores, 0, -1);
        $query = "INSERT INTO {$this->tabela} ({$colunas}) VALUES ({$valores})";
        $registro = $this->conexao->prepare($query);
        $registro->execute();
        return $this->conexao->lastInsertId();

    }

    public function update(array $dados, array $condicao)
    {
        $dadosTratados = "";
        $condicaoTratada = "";
        foreach ($dados as $column => $dado) {
            $dadosTratados .= "{$column} = '{$dado}',";
        }

        foreach ($condicao as $column => $dado) {
            $condicaoTratada .= "{$column} = '{$dado}' AND";
        }

        $dadosTratados = substr($dadosTratados, 0, -1);
        $condicaoTratada = substr($condicaoTratada, 0, -3);
        $query = "UPDATE {$this->tabela} SET {$dadosTratados} WHERE {$condicaoTratada}";
        $registro = $this->conexao->prepare($query);
        $registro->execute();
        return $this->conexao->lastInsertId();
    }

    public function delete(array $condicao)
    {

        $condicaoTratada = "";
        foreach ($condicao as $column => $dado){
            $condicaoTratada .= "{$column} = '{$dado}' AND";
        }

        $condicaoTratada = substr($condicaoTratada,0,-3);
        $query = "DELETE FROM {$this->tabela} WHERE {$condicaoTratada}";
        $registro = $this->conexao->prepare($query);
        $registro->execute();

    }
}