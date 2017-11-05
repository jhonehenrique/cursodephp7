<?php

$pessoa = array(
	'nome' => 'Jhone',
	'idade' => 27
	);

foreach ($pessoa as &$value) {
	if(gettype($value) === 'integer') $value +=10;
	echo $value . "<br>";
}

print_r($pessoa);

?>