<?php


$name = "imagens";


if (!is_dir($name))
{

	mkdir($name);

} else {

	rmdir($name);

}

?>