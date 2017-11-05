<?php


$hierarquia = array(
	array(
	'nome_cargo' => 'CEO',
	'subordinados' => array(
		//Inicio: Diretor comercial
		array(
			'nome_cargo' => 'Diretor comercial',
			'subordinado' => array(				
				//Inicio: Gerente de Vendas
				array(
					'nome_cargo' => 'Gerente de Vendas'
					)
				//Termino: Gerente de Vendas
				)
			),
		//Termino: Diretor comercial		
		//Inicio: Diretor Financeiro		
		array(
			'nome_cargo' => 'Diretor Financeiro',
			'subordinados' => array(
				//Inicio: Gerente de Contas a Pagar
				array(
					'nome_cargo' => 'Gerente de contas a pagar',
					'subordinados' => array(
						//Inicio: supervisor de Pagamentos
						array(
							'nome_cargo' => 'Supervisor de Pagamentos'
							)
						//Termnio: supervisor de Pagamentos
						)

					),
				//Termino: Gerente de Contas a Pagar				
				//Inicio: Gerente de Compras
				array(
					'nome_cargo' => 'Gerente de Compras',
					'subordinados' => array(
						//Inicio: Supervisor de Suprimentos
						array(
							'nome_cargo' => 'Supervidor de Suprimentos',
							'subordinados' => array(
								array(
									'nome_cargo' => 'Funcionarios' 
									)
								)
							)
						//Termino: Supervisor de Suprimentos
						)
					)
				//Termnio: Gerente de Compras

				)
			)
		//Termino: Diretor Financeiro		
		)
	)
);


//Função RECUSIVA onde ela chama ela mesma para deixar o codigo mais dinamico
function exibe($cargos) {
	$html = "<ul>";
		foreach ($cargos as $cargo) {
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
				$html .= exibe($cargo['subordinados']);
			}
			$html .= "</li>";
		}
	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

?>