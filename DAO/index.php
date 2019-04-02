<?php

require_once("config.php");

/*
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
//-------

//carrega um usuario
/*$usuario = new Usuario();
$usuario->loadbyId(3);
echo $usuario;
*/

//carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//carrega o usuário buscado
/*$busca = Usuario::search("jo");
echo json_encode($busca);
*/

//carrega um usuário usando login e a senha
/*$login = new Usuario();
$login->login("jose","1234567890");
echo $login;
*/

//Criando um novo usuário
/*$aluno = new Usuario("aluno","@lun0");
$aluno->insert();
echo $aluno;
*/

//alterar um usuário
/*$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "pr0f3ss0r");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>