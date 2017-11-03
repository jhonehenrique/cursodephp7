<?php
/*
 function ola($texto) {
 	return "Olá $texto!<br>";
 }

function ola($texto = "Mundo") {
	return "Olá $texto!<br>";
}
*/


//Parâmetros que não tem valor padrão tem que ficar a esquerda;
function ola($texto = "Mundo", $periodo) {
	return "Olá $texto! $periodo<br>";
}

echo ola("","bom dia");
echo ola("", "boa tarde");
echo ola("Jhone", "Boa noite");
echo ola("Henrique", "Boa tarde");
echo ola("Erlich", "");

?>