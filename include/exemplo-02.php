<?php


//Include faz o possivel para arquivo abrir e tem mais recursos, porém o mais recomendado é o Require//
//include "exemplo-01.php";



//Require Exige que o arquivo exista e esteja funcionando//
// require "exemplo-01.php";
// require "exemplo-01.php";


//Requre once chama o arquivo somente uma vez e impede erros caso o arquivo ja esta chamado//
require_once "exemplo-01.php";

$resultado = somar(20, 20);

echo $resultado;

?>