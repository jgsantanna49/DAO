<?php 
require_once("config.php");

//carrega um usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//echo $usuario;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login com LIKE
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Alisson","12345");
echo $usuario;

 ?>