<?php

require_once("config.php");

// $sql = new Sql();

// $users = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($users);

/*carrega um usuario
$root = new Usuario();
$root->loadById(5);
echo $root;
*/

// a vantagem de ser estatico, é q pode ser chamado direto
// $lista = Usuario::getList();

// echo json_encode($lista);


//carrega uma lista de usuarios pelo login

// $search = Usuario::search("jo");

// echo json_encode($search);

//carrega um usuario usando login e senha

// $user = new Usuario();

// $user->login("user", "12345");

// echo $user;


//insert de novo usuario

// $aluno = new Usuario("aluno", "@lun0");

// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@lun0");

// $aluno->insert();

// echo $aluno;

// $usuario = new Usuario();

// $usuario->loadById(4);

// $usuario->update("professor", "%!&¨#&*");

// echo $usuario;

$user = new Usuario();

$user->loadById(7);

$user->delete();
echo $user;