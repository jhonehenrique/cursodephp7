<?php

$conn = new PDO("sqlsrv:Database=dbphp7; server\SQLEXPRESS; ConnectionPooling=0=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($result as $row) {
	foreach ($row as $key => $value){
		echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
	}

	echo "<hr>";
}


?>