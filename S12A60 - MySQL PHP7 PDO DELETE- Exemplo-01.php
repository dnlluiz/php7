<?php

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "annajulia");
$conn = new PDO("mysql:dbname=danielsilvacom_principal;host=danielsilva.com.br","danielsilvacom_usuario", "7DM]6Cfq_TGj");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 1;

$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Deletado ok <br>";

?>