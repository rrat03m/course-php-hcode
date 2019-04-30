<?php

$conn = new PDO("mysql:dbname=php7hcode;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(:LOGIN, :PASSWORD)");

$login = "José";
$password = "123";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->execute();

?>