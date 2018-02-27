<?php
function __autoload($classe)
{
    include_once "{$classe}.php";
}

$db = new Conn("localhost", "test_oo", "root", "");


/*
$produtos = [];
$produtos[] = (new Produto())->setIdProd(9);
$produtos[] = (new Produto())->setIdProd(8);
*/

$produtos = [];
$produtos[] = (new Produto())->setIdProd(3);

$produtoDao = new ProdutoDao($db);

$registros = $produtoDao->fetch("idProd = 2");

/*
$registros = $produtoDao->fetchAll("descricao = '{$produto->getDescricao()}'");
if (empty($registros)) {
    $produtoDao->insert([
        'descricao' => $produto->getDescricao(),
        'valor' => $produto->getValor()
    ]);
}
*/

/*
$produtoDao->update([
    'descricao' => $produto->getDescricao(),
    'valor' => $produto->getValor()
], [
    'idProd' => $produto->getIdProd(),
    'descricao' => 'Smartphone Iphone 8X'
]);
*/
foreach ($produtos as $produto) {
    $produtoDao->delete([
        'idProd' => $produto->getIdProd()
    ]);
}

print_r(json_encode($registros));

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