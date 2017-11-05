<?php

$a = 10;

/* 
//PASSAGEM SE PARÂMETRO POR REFERÊNCIA COM: &//
function trocaValor(&$b) {
	// $a += 50;
	$b += 50;
	return $b;
}
*/
function trocaValor(&$b) {
	// $a += 50;
	$b += 50;
	return $b;
}

echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";

echo $a;

?>