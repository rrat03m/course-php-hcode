<?php


require_once("config.php");

use Cliente\Cadastro;

$cad = new  Cadastro();

$cad->setNome("Rafael Rodrigues");
$cad->setEmail("RafaelRodrigues@email.com");
$cad->setSenha("12345");

// echo $cad;

$cad->registrarVenda();

?>