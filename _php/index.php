<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IDao.php";
require_once "IProduto.php";
require_once "Produto.php";
require_once "ProdutoDao.php";

$db = new Conn("localhost", "test_oo", "root", "");
$produto = new Produto;
$produtoDao = new ProdutoDao($db);
$servicoDao = new ServicoDao($db);


$produtoDao->insert([
    'teste' => 'teste'
]);

$servicoDao->insert([
    'teste' => 'teste'
]);

print_r($produtoDao->get());


/*
    $idProduto = isset($_GET['id'])
                ? $_GET['id']
                : 1;

            $query = "SELECT * FROM produtos WHERE idProd=:idProd";
            $registros = $conn->prepare($query);
            $registros->bindValue(':idProd', $idProduto);
            $registros->execute();

            print_r($registros->fetchAll());


    try {
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "");

    $registros = $conn->query("SELECT * FROM produtos ORDER BY descricao");
    $produtos = $registros->fetchAll();
    foreach ($produtos as $produto) {
        echo $produto['descricao'];
        echo "<br/>";
    }

} catch (\PDOException $e) {
    echo "Ops! Ocorreu um problema inesperado..." . "<br> Message: " . $e->getMessage() . "<br> Code: " . $e->getCode();
}
*/