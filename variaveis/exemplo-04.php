<?php
	
	//$nome = $_GET["a"];
	//$nome = (int)$_GET["a"];
	//var_dump($nome);
	
	//IP do usuário
	$ip = $_SERVER["REMOTE_ADDR"];
	
	//Pega o nome do arquivo em execução
	$name = $_SERVER["SCRIPT_NAME"];

	echo $ip;
	echo "<br><hr>";
	echo $name;

?>