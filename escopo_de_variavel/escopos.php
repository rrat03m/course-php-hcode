<?php

$nome = "Fulano";

function MostraNome()
{
	global $nome;
	echo $nome;
}

function SegundaFuncao()
{
	$nome = "Fulano";

	echo $nome." Agora na SegundaFuncao";
}

// MostraNome();
SegundaFuncao();

?>