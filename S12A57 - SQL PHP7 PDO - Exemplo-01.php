<?php

$conn = new PDO("sqlsrv:Database=baseDANIEL;server=srv_erp;ConnectionPooling=0","daniel", "MasterKey1488");

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