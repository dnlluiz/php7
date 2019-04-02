<?php

$conn = new PDO("mysql:dbname=baseDANIEL;host=localhost","root", "annajulia");
//$conn = new PDO("mysql:dbname=danielsilvacom_baseTESTE;host=danielsilva.com.br","danielsilvacom_ADMIN", "7DM]6Cfq_TGj");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "---------------------------------------------<br>";
foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br>";
	}
	echo "---------------------------------------------<br>";
}

//var_dump($results);

?>