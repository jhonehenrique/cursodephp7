<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 8;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

$conn->rollback();
//$conn->commit();

echo "Excluido com sucesso!";


?>