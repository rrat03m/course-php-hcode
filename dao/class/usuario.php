<?php

class Usuario extends Sql{

	private $uid;

	private $des_login;

	private $des_senha;


	public function getIdusuario()
	{
		return $this->uid;
	}

	public function setIdusuario($uid)
	{
		$this->uid = $uid;
	}


	public function getDesLogin()
	{
		return $this->des_login;
	}

	public function setDesLogin($login)
	{
		$this->des_login = $login;
	}


	public function getDesSenha()
	{
		return $this->des_senha;
	}

	public function setDesSenha($senha)
	{
		$this->des_senha = $senha;
	}		

	public function loadById($id)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE `uid` = :ID", array(
			":ID" => $id
		));

		if (count($results) > 0) {

			$row = $results[0];
			
			$this->setIdusuario($row['uid']);
			$this->setDesLogin($row['des_login']);
			$this->setDesSenha($row['des_senha']);
		}
	}


	public function __toString()
	{

		return json_encode(array(
			
			"uid" => $this->getIdusuario(),

			"des_login" => $this->getDesLogin(),
			
			"des_senha" => $this->getDesSenha()
	
		));

	}

}

?>