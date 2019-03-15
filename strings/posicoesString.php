<?php


$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

// Me retorna posição da palavra mãe
$q = strpos($frase, $palavra );
// me retorna texto até a palavra mãe
$texto = substr($frase, 0, $q);

var_dump($texto);
// me retorna texto desde a palavra mãe
$texto2 = substr($frase, $q);

var_dump($texto2);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto2);

?>