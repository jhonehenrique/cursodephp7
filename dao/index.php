<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);



//Carrega um usuario por ID//
// $root = new Usuario();
// $root->loadById(3);



//Carrega uma lista de usuarios//
//$lista = Usuario::getList();


//Carrega lista de usuario buscando pelo login//
//$search = Usuario::search("jhone");


//Carega usuario usando login e senha//
//$usuario = new Usuario();
//$usuario->login("Jhone", "abcd123");
//echo $usuario;



$aluno = new Usuario();
$aluno->setDeslogin("Aluno");
$aluno->setDessenha("lin0");

$aluno->insert();


echo $aluno;

//echo json_encode($search);


?>