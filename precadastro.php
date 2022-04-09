<?php

Class PreCadastro
{
    private $clienteid;
    private $precadastroid;
    private $medicosprocedimentos;
    private $precadastrohora;
    private $precadastrodata;

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
		$query = "insert into tbpre_cadastro (tbcliente_id, tbmedicos_procedimentos_id, tbpre_cadastro_data,tbpre_cadastro_hora) 
        values($this->clienteid, $this->medicosprocedimentos,'$this->precadastrodata','$this->precadastrohora')";

		//echo $query;
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
    public function listarClientes(){
		$consulta = "select * from tbcliente;"; 
		$resultadocliente = mysqli_query($this->con, $consulta);
		return $resultadocliente;
	}
	public function listarMedico(){
		//$consulta = "select * from tbmedico"; 
        $consulta = "select p.tbmedicos_procedimentos_id, m.tbmedico_id, m.tbmedico_nome, t.tbtipo_procedimento_id, t.tbtipo_procedimento  from tbmedicos_procedimentos p
        inner join tbmedico m
        on p.tbmedico_id  = m.tbmedico_id 
        inner join tbtipo_procedimento t
        on p.tbtipo_procedimento_id  = t.tbtipo_procedimento_id 
        order by m.tbmedico_nome ;"; 
		$resultado = mysqli_query($this->con, $consulta);
		return $resultado;
	}

	public function listarProcedimentos(){
		$sql = "select * from tbtipo_procedimento"; 
		$result = mysqli_query($this->con, $sql);
		return $result;
	}

    public function listarConsultas(){
		$sql = "select c.tbcliente_nome, m.tbmedico_nome, tp.tbtipo_procedimento , p.tbpre_cadastro_data,p.tbpre_cadastro_Hora  from tbpre_cadastro p
        inner join  tbcliente c 
        on p.tbcliente_id  = c.tbcliente_id 
        inner join tbmedicos_procedimentos mp 
        on p.tbmedicos_procedimentos_id  = mp.tbmedicos_procedimentos_id 
        inner join tbmedico m
        on mp.tbmedico_id  = m.tbmedico_id
        inner join tbtipo_procedimento tp 
        on mp.tbtipo_procedimento_id  = tp.tbtipo_procedimento_id "; 
		$resultconsulta = mysqli_query($this->con, $sql);
		return $resultconsulta;
	}


	
	// ---- getters e setters --------
	
    public function getPreCadastroId(){
        return $this -> precadastroid;
    }

    public function setPreCadastroId($precadastroid){
        $this->precadastroid = $precadastroid;
    }

    public function getClienteId(){
        return $this -> clienteid;
    }

    public function setClienteId($clienteid){
        $this->clienteid = $clienteid;
    }

    public function getMedicosProcedimentosId(){
        return $this -> medicosprocedimentos;
    }

    public function setMedicosProcedimentosId($medicosprocedimentos){
        $this->medicosprocedimentos= $medicosprocedimentos;
    }

    public function getPreCadastroData(){
        return $this -> precadastrodata;
    }

    public function setPreCadatroData($precadastrodata){
        $this->precadastrodata= $precadastrodata;
    }

    public function getPreCadastroHora(){
        return $this -> precadastrohora;
    }

    public function setPreCadastroHora($precadastrohora){
        $this->precadastrohora= $precadastrohora;
    }
}
?>
