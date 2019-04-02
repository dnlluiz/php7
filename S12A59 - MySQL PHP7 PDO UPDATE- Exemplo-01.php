<?php

//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "annajulia");
$conn = new PDO("mysql:dbname=danielsilvacom_principal;host=danielsilva.com.br","danielsilvacom_usuario", "7DM]6Cfq_TGj");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$senha = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Alterado ok <br>";

?>