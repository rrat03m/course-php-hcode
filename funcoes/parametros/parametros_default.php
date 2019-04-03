<?php


function ola($texto, $periodo = "Bom dia") {
	
	return "Olá {$texto} {$periodo} !<br>";

}

echo ola("Mundo");
echo ola("Rafael", "Boa noite");
echo ola("José", "Boa tarde!");

?>