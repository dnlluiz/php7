<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");

$headers = array();

foreach ($usuarios[0] as $numero => $valor) {
	array_push($headers, $numero);
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(";", $headers)."\r\n");

foreach ($usuarios as $linha ) {

	$dados = array();

	foreach ($linha as $coluna => $valor) {

		array_push($dados, $valor);

	}//End Foreach de colunas

	fwrite($file, implode(";", $dados)."\r\n");

}//End Foreach de linhas

fclose($file);

?>