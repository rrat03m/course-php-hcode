<?php

$hierarquia = array(

	array(
		
		'nome_cargo' => 'CEO',

		'subordinados' => array(
			// Início: Diretor comercial
			array(

				'nome_cargo' => 'Diretor Comercial',

				'subordinados' => array(
					//Início: Gerente de vendas
					array(
						'nome_cargo' => 'Gerente de vendas'
					)
				)


			),

			array(

				'nome_cargo' => 'Diretor financeiro',

				'subordinados' => array(
					// Início: Supervisor de contas a pagar
					array(

						'nome_cargo' => 'Gerente de contas a pagar',

						'subordinados' => array(
							// Início: supervisor de pagamentos
							array(

								'nome_cargo' => 'Supervisor de pagamentos'

							)// Termino supervisor de pagamentos

						)

					),
					// termino gerente de contas a pagar

					// Início gerente de compras
					array(

						'nome_cargo' => 'Gerente de compras',

						'subordinados' => array(

							// Início supervisor de suprimentos
							array(

								'nome_cargo' => 'Supervisor de suprimentos'

							)
							// Termino supervisor de suprimentos

						)

					)
					// termino gerente de compras

				)

			)
		) 
	)

);


function exibe($cargos) {


	$html = '<ul>';

	foreach ($cargos as $cargo) {
	
		$html .= "<li>";

		$html .=  $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && sizeof($cargo['subordinados']) > 0) {

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";	

	}

	$html .= "</ul>";


	return $html;
}


echo exibe($hierarquia);

?>