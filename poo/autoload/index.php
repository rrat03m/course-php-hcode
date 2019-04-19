<?php

function my_autoloader($class) {

	var_dump($class);

    require_once $class . '.php';
}

spl_autoload_register('my_autoloader');

$carro = new DelRey();

$carro->acelerar(80);

?>