<?php

class Pessoa {
	public $nome;//Atributo
	public function falar() {//Metodo
		return  "O meu nome é " . $this->nome;
	}

}

$jhone = new Pessoa();
$jhone->nome = "Jhone Henrique";
echo $jhone->falar();

?>