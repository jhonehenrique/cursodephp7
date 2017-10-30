<?php

$nome = "Jhone";

function teste() {
	global $nome;
	echo $nome;
};

function teste2() {
	
	$nome = "Bianca";
	echo $nome . "agora no teste2";
};

teste();
teste2();

?>