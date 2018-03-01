<?php

require_once ("../vendor/autoload.php");

$db = CContainer::getConexao();

$cliente = CContainer::getCliente();

$registros = $cliente->listarDados();

print_r(json_encode($registros));