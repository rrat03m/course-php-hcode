<?php

$data = array(
	"empresa" => "Nexus"
);

setcookie("usuario", json_encode($data), time() + 3600);

echo "Ok";

?>