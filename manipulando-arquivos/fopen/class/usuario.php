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



	public static function getList()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY `des_login`");
	}



	public static function search($login)
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login", array(
			"SEARCH" => "%".$login."%"
		));


	}


	public function login($login, $senha)
	{
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE `des_login` = :LOGIN and `des_senha` = :PASSWORD", array(
			":LOGIN" => $login,
			":PASSWORD" => $senha
		));

		if (count($results) > 0) {

			$row = $results[0];
			
			$this->setIdusuario($row['uid']);
			$this->setDesLogin($row['des_login']);
			$this->setDesSenha($row['des_senha']);

		} else {

			throw new Exception("LOGIN OU SENHA INCORRETOS");
			
		}
	}


	public function insert()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			":LOGIN" => $this->getDesLogin(),
			":PASSWORD" => $this->getDesSenha()
		));

		if(count($results) > 0)
		{
			$this->setData($results[0]);
		}
	}


	public function update($login, $password)
	{
		$this->setDesLogin($login);
		$this->setDesSenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET `des_login` = :LOGIN, `des_senha` = :SENHA WHERE `uid` = :ID",array(
			":LOGIN" => $this->getDesLogin(),
			":SENHA" => $this->getDesSenha(),
			":ID" => $this->getIdusuario()
		));
	}


	public function delete()
	{
		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE `uid` = :ID", array(
			":ID" => $this->getIdusuario()
		));

		$this->setIdusuario(0);
		$this->setDesLogin("");
		$this->setDesSenha("");
	}


	public function setData($data)
	{
		$this->setIdusuario($data['uid']);
		$this->setDesLogin($data['des_login']);
		$this->setDesSenha($data['des_senha']);		
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