<?php

//Uma classe pode implemenar diversas interfaces
interface Veiculo {
		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
}

//Uma classe pode heradr somente uma classe abstrata
abstract class Automovel implements Veiculo {
	public function acelerar($velocidade) {
		echo "O veículo até " . $velocidade . " km/h";
	}

	public function frenar($velocidade) {		
		echo "O veículo frenou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha) {
		echo "O veículo engatou a marcha " . $marcha;
	}
}

class DelRey extends Automovel {
	public function empurrar() {

	}
}

$carro = new DelRey();

$carro->acelerar(200);

?>