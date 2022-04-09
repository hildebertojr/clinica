<?php

Class Cliente
{
    private $id;
    private $nome;
    private $logradouro;
    private $numero;
    private $complemento;
    private $cep;
    private $bairro;
    private $cidade;
    private $telefone;
    private $email;
    private $planosaude;
    private $carteira;   
    private $idade;   

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
		$query = "insert into tbcliente (tbcliente_nome,	tbcliente_logradouro, tbcliente_numero,
		tbcliente_complemento,tbcliente_cep,tbcliente_bairro,tbcliente_cidade,tbcliente_telefone,
		tbcliente_email, tbcliente_planosaude, tbcliente_dadoscarteira,tbcliente_idade) values('$this->nome', 
		'$this->logradouro', $this->numero, '$this->complemento', $this->cep, '$this->bairro', '$this->cidade',
		 '$this->telefone', '$this->email', '$this->planosaude', '$this->carteira', $this->idade)";

		 //echo $query;
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	
	// método alteração
	public function Alterar()
	{
		$query = "update clinica.tbcliente  set tbcliente_nome = '$this->nome', 
		tbcliente_logradouro = '$this->logradouro', 
        tbcliente_numero = $this->numero, 
        tbcliente_complemento = '$this->complemento', 
        tbcliente_cep = $this->cep, 
        tbcliente_bairro = '$this->bairro', 
        tbcliente_cidade = '$this->cidade', 
        tbcliente_telefone = '$this->telefone', 
        tbcliente_email = '$this->email', 
        tbcliente_planosaude = '$this->planosaude', 
        tbcliente_dadoscarteira = '$this->carteira', 
        tbcliente_idade = $this->idade
        where tbcliente_id = $this->id";

        //echo $query;

		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	

	// método exclusão
	public function Excluir()
	{
		$query = "delete from tbcliente where tbcliente_id = '$this->id'";
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

    public function getLogradouro(){
        return $this -> logradouro;
    }
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getNumero(){
        return $this -> numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
 
	public function getComplemento(){
        return $this -> complemento;
    }
    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
	public function getCep(){
        return $this -> cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }

	public function getBairro(){
        return $this -> bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

	public function getCidade(){
        return $this -> cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

	public function getTelefone(){
        return $this -> telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

	public function getEmail(){
        return $this -> email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

	public function getPlanosaudade(){
        return $this -> planosaude;
    }
    public function setPlanosaude($planosaude){
        $this->planosaude = $planosaude;
    }

	public function getCarteira(){
        return $this -> carteira;
    }
    public function setCarteira($carteira){
        $this->carteira = $carteira;
    }

	public function getIdade(){
        return $this -> idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
}

?>
