<?php

function ola1() {
	echo "Hllo Wolrd!<br>";
}

function ola() {
	return "Ola mundo!";
}


echo ola1();
$frase = ola();

echo strlen($frase);
?>