<?php




class Endereco  

{


	private $logradouro;

	private $numero;

	private $cidade;


	public function __construct($log,$num,$cid)
	{

		$this->logradouro = $log;

		$this->numero = $num;

		$this->cidade = $cid;

	}


	public function __destruct()
	{

		// var_dump("DESTRUIR");

	}


	public function __toString()
	{

		return $this->logradouro.", ".$this->numero." - ".$this->cidade;

	}

}


$meuEndereco = new Endereco("Rua Ademar Saraiva Leão",1,"Anápolis");

// var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;

?>