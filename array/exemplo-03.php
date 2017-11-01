<?php

//ARRAY BIDIMENSIONAL//

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Jhone',
	'idade' => 27,
	'profissao' => 'programador'
));

array_push($pessoas, array(
	'nome' => 'Bianca',
	'idade' => 19,
	'profissao' => 'dona de casa'
));


echo "<pre>";
print_r($pessoas);
print_r($pessoas[0]['nome']);

?>