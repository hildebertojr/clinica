<?php

Class TipoProcedimento
{
    private $id;
    private $procedimento;


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
		$query = "insert into tbtipo_procedimento (tbtipo_procedimento) 
        values('$this->procedimento')";

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

    public function getProcedimento(){
        return $this -> procedimento;
    }

    public function setProcedimento($procedimento){
        $this->procedimento = $procedimento;
    }

    

}

?>
