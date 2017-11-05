<?php

function test($callback) {
	//Processo lento

	$callback();
}

test(function() {
	echo "Finzalizado com sucesso!";
});

?>