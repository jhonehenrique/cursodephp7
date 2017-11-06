<?php

namespace Cliente;

class Cadastro extends \Cadastro {
	public function registrarVenda() {
		echo "Foi registrada um venda para o cliente " . $this->getNome();
	}
}

?>