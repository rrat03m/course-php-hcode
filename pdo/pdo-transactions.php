<?php

$conn = new PDO("mysql:dbname=php7hcode;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE uid = ?");

$uid = 1;

$stmt->execute(array($uid));

// $conn->rollback();

$conn->commit();

?>