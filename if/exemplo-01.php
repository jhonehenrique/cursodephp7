<?php

$qualSuaIdade = 10;

$idadeCrianca = 12;
$idadeJovem = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrianca) {
	echo "Você é uma criança!";
}else if ($qualSuaIdade < $idadeJovem){
	echo "Você é adolecente!";
}else if ($qualSuaIdade < $idadeMelhor) {
	echo "Você é um adulto";
}else{
	echo "Você é um idoso";
}

echo "<br>";

//Condições ternarias//
echo ($qualSuaIdade < $idadeMelhor) ? "Menor de idade" : "maior de idade";

?>