<?php

$conn = new PDO("mysql:dbname=baseDANIEL;host=localhost","root", "annajulia");
//$conn = new PDO("mysql:dbname=danielsilvacom_principal;host=danielsilva.com.br","danielsilvacom_usuario", "7DM]6Cfq_TGj");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD);");
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$senha);
$stmt->execute();

echo "Inserido ok <br>";

?>