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
//$usuario = new Usuario();
//$usuario->login("Alisson","12345");
//echo $usuario;

//inserindo um usuario sem o construtor
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//$aluno->insert();
//echo $aluno;

//inserindo um usuario com o construtor
//$novo = new Usuario("novo","n0v0");
//$novo->insert();
//echo $novo;

//fazendo um update no index
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("Batman","bats&nh@");
echo $usuario;

 ?>