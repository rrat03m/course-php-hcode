<?php

$conn = new PDO("mysql:dbname=php7hcode;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE uid = :UID");

$login = "rrat03m";
$password = "1357895";
$uid = 1;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":UID",$uid);
$stmt->execute();

?>