<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Jhone";
$password = "abcd123";
$id = 7;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado com sucesso!";


?>