<?php 

$resultado =  10 + 3 / 2;

echo $resultado;

echo "<br>";

$resultado =  (10 + 3) / 2;

echo $resultado;
 
$resultado =  (10 + 3) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

$resultado =  (10 + 3) / 2 > 5 && 10 + 5 < 20;

var_dump($resultado);

$resultado =  (10 + 3) / 2 > 5 || 10 + 5 < 20;

var_dump($resultado);

?>