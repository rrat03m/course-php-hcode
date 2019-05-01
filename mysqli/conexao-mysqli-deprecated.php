<?php


$conn = new mysqli("localhost", "root", "", "php7hcode");

if($conn->connect_error)
{
	echo "Error" . $conn->connect_error;
}

$stmt  = $conn->prepare("
	INSERT INTO tb_usuarios (deslogin, dessenha)
	VALUES(?, ?)
");

$stmt->bind_param("ss",$login,$senha);

$login = "rrat03m@gmail.com";
$senha = "12345";

$stmt->execute();

?>