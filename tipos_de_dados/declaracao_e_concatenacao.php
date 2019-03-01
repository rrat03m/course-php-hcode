<?php

/*
$anoNascimento = 1997;

$nomeCompleto = 'Joao';
*/

// Na linha debaixo temos uma variável com número no nome
$nome1 = "Rafael";

$sobreNome = "Rodrigues";

$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;
exit;

echo $nome1;

echo "<br>";

// unset($nome1);

if (isset($nome1)) {

	echo $nome1;	

}



?>