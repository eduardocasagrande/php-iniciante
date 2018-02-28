<?php

require_once ("CCliente.php");

$db = new \PDO("mysql:host=localhost;dbname=loja","root","");

$cliente = new Cliente($db);

$registros = $cliente->listarDados();

print_r(json_encode($registros));