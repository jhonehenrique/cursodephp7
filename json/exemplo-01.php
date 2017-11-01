<?php

//JSON ENCODE//

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


echo json_encode($pessoas);

?>