<?php

$conn = new PDO("mysql:dbname=php7hcode;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE uid = :UID");

$uid = 4;

$stmt->bindParam(":UID",$uid);
$stmt->execute();

?>