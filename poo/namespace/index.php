<?php 

require_once("config.php"); 

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Jhone Henrique");
$cad->setEmail("jhone@xbyte.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

?>