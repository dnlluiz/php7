<?php

//$conn = new mysqli("localhost", "root", "annajulia", "dbphp7");
$conn = new mysqli("localhost", "danielsilvacom_usuario", "7DM]6Cfq_TGj", "danielsilvacom_principal");

if ($conn->connect_error) {
	echo "Erro: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin;");

//Formato de saída 04

$data = array();

while ($row = $result->fetch_assoc()) {
	array_push($data, $row);
}
echo json_encode($data);
//Fim saída 04

/*
//Formato de saída 01
while ($row = $result->fetch_assoc()) {
	var_dump($row);
}
//Fim saída 01*/

/*
//Formato de saída 02
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	var_dump($row);
}
//Fim saída 02*/

/*
//Formato de saída 03
while ($row = $result->fetch_array()) {
	var_dump($row);
}
//Fim saída 03*/

?>