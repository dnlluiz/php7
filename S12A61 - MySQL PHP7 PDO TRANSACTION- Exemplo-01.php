<?php

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "annajulia");
$conn = new PDO("mysql:dbname=danielsilvacom_principal;host=danielsilva.com.br","danielsilvacom_usuario", "7DM]6Cfq_TGj");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Deletado ok <br>";

?>