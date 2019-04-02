<?php

//$conn = new mysqli("localhost", "root", "annajulia", "dbphp7");
$conn = new mysqli("localhost", "danielsilvacom_usuario", "7DM]6Cfq_TGj", "danielsilvacom_principal");

if ($conn->connect_error) {
	echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

$stmt->bind_param("ss", $login, $pass); //s = string

$login="user";
$pass="12345";

$stmt->bind_param("ss", $login, $pass); //s = string

$login="user";
$pass="12345";

$stmt->execute();

$login="root";
$pass="!@#$";

$stmt->execute();

?>