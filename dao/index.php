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
//echo json_encode($lista);


//Carrega lista de usuario buscando pelo login//
//$search = Usuario::search("jhone");
//echo json_encode($search);

//Carega usuario usando login e senha//
// $usuario = new Usuario();
// $usuario->login("Jhone", "abcd123");
// echo $usuario;




// $aluno = new Usuario();
// $aluno->setDeslogin("Jhone");
// $aluno->setDessenha("0101");
//$aluno = new Usuario();
//$aluno->setDeslogin("Aluno");
//$aluno->setDessenha("lin0");


// $aluno = new Usuario("Develper", "webphp");
// $aluno->insert();
// echo $aluno;

//UPDATE//
// $usuario = new Usuario();
// $usuario->loadById(25);
// $usuario->update("Programador", "phpwebdeveloper");
// echo $usuario;


//DELETE//
$usuario = new Usuario();
$usuario->loadById(25);
$usuario->delete();
echo $usuario;



?>