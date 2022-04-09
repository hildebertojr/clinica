<?php

Class Medico
{
    private $id;
    private $nome;
    private $especialidade;
    private $crm;   

	public $con; // variável para conexão com BD
	
	public function ConectaBD()

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

	// método inclusão
	public function Incluir()
	{
		$query = "insert into tbmedico (tbmedico_nome,	tbmedico_especialidade, tbmedico_crm) 
        values('$this->nome', 
		'$this->especialidade', '$this->crm')";

		// echo $query;
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	
	// ---- getters e setters --------
	
    public function getId(){
        return $this -> id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this -> nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEspecialidade(){
        return $this -> especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getCrm(){
        return $this -> crm;
    }

    public function setCrm($crm){
        $this->crm = $crm;
    }

}

?>
