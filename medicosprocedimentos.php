<?php

Class MedicosProcedimentos
{
    private $id;
    private $medicoid;
    private $tipoprocedimentoid;
   

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
		$query = "insert into tbmedicos_procedimentos (tbmedico_id, tbtipo_procedimento_id) 
        values($this->medicoid, $this->tipoprocedimentoid)";

		// echo $query;
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	
	public function listarMedico(){
		$consulta = "select * from tbmedico"; 
		$resultado = mysqli_query($this->con, $consulta);
		return $resultado;
	}

	public function listarProcedimentos(){
		$sql = "select * from tbtipo_procedimento"; 
		$result = mysqli_query($this->con, $sql);
		return $result;
	}
	
	// ---- getters e setters --------
	
    public function getId(){
        return $this -> id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getMedicoId(){
        return $this -> medicoid;
    }

    public function setMedicoId($medicoid){
        $this->medicoid = $medicoid;
    }

    public function getTipoProcedimentoId(){
        return $this -> tipoprocedimentoid;
    }

    public function setTipoProcedimentoId($tipoprocedimentoid){
        $this->tipoprocedimentoid = $tipoprocedimentoid;
    }

}

?>
