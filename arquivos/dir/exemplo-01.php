<?php

$name = "images";

if(!is_dir($name)) {
	//Cria diretorios
	mkdir($name);
	echo "Diretorio criado com sucesso!";
} else {
	echo "Já existe o diretório: $name";
	
	//Remove diretorios
	//rmdir($name);
	//echo "Removido o diretório: $name";
}

?>