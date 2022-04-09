<?php
Class ConectaBD
{


//host, usuário, senha, nome do banco
//$conn = mysqli_connect('localhost', 'seu_usuario', 'sua_senha', 'nome_do_seu_banco') or die('Erro ao conectar ao banco de dados');
//$conn = mysqli_connect('localhost', '367568', '123456', '367568') or die('Erro ao conectar ao banco de dados');


	public $con; // variável para conexão com BD
	
	public function ConectarBanco()

	{

		// ----------------------- MYSQL --------------------
		//Teste
		// conexão com a base de dados MySql 

		$host = "localhost:3306";

		$usuario = "root";

		$senha = "admin";

		$bd = "clinica";

		$this->con = mysqli_connect($host, $usuario, $senha, $bd);

		return $this->con;

	}


}
?>