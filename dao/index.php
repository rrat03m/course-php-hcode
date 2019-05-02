<?php


require_once("config.php");



/*
	Carrega todos os usuários através do método select
*/

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo  json_encode($usuarios);




/*
	Carrega um usuário através do método loadById
*/

// $usuario = new Usuario();

// $usuario->loadById(7);

// echo $usuario;



/*
	Carrega todos os usuários através do método getList
*/

//$lista = Usuario::getList();
//echo json_encode($lista);


/*
	Carrega uma lista de usuários buscando pelo login
*/

// $search = Usuario::search("jo");
// echo json_encode($search);



/*
	Carrega um usuário autenticado
*/

// $login = new Usuario();

// $userLogin = "José";
// $passwordLogin = "123"; 

// $login->login($userLogin, $passwordLogin);

// echo $login;


/**
	Criando usuário com procedures
*/

// $aluno = new Usuario();

// $aluno->setDesLogin("aluno");
// $aluno->setDesSenha("@lun0");

// $aluno->insert();

// echo $aluno;


/**
	Atualizando usuário com método update
*/

// $usuario = new Usuario();

// $usuario->loadById(7);

// $usuario->update("professor", "123456");

// echo($usuario);


$usuario = new Usuario();

$usuario->loadById(7);

echo($usuario);

$usuario->delete();

?>