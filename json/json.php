<?php


$pessoas = array();


array_push($pessoas, array(
	'nome' => 'João',

	'idade' => 20
));


array_push($pessoas, array(
	'nome' => 'Rafael',

	'idade' => 22
));


// print_r($pessoas);

echo json_encode($pessoas);

?>