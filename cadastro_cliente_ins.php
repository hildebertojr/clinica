<?php

$v_nome = $_POST['nome'];
$v_logradouro = $_POST['logradouro'];
$v_numero = $_POST['numero'];
$v_complemento = $_POST['complemento'];
$v_cep = $_POST['cep'];
$v_bairro= $_POST['bairro'];
$v_cidade = $_POST['cidade'];
$v_telefone = $_POST['telefone'];
$v_email = $_POST['email'];
$v_planosaude = $_POST['planosaude'];
$v_carteira = $_POST['carteira'];   
$v_idade= $_POST['idade'];   

include("Cliente.php");
    

try {
  $cliente = new Cliente;
  $cliente->setNome($_POST['nome']);
  $cliente->setLogradouro($_POST['logradouro']);
  $cliente->setNumero($_POST['numero']);
  $cliente->setComplemento($_POST['complemento']);
  $cliente->setCep($_POST['cep']);
  $cliente->setBairro($_POST['bairro']);
  $cliente->setCidade($_POST['cidade']);
  $cliente->setTelefone($_POST['telefone']);
  $cliente->setEmail($_POST['email']);
  $cliente->setPlanosaude($_POST['planosaude']);
  $cliente->setCarteira($_POST['carteira']);
  $cliente->setIdade($_POST['idade']);
  $cliente->ConectaBD();
  $cliente->Incluir();
  
} catch (Exception $e) {
  echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

?>

<html>
<body>
<?php include 'cabecalho.php'?>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<div>Cadastro de clientes - Inclusão</div>
<?php 
echo 'Nome: ' . $v_nome;
echo "</br>";
echo 'Logradouro: ' . $v_logradouro . "\n";
echo "</br>";
echo 'Numero: ' . $v_numero . "\n";
echo "</br>";
echo "Complemento: " . $v_complemento . "\n";  
echo "</br>";
echo "Cep: " . $v_cep . "\n";  
echo "</br>";
echo "Bairro: " . $v_bairro . "\n";  
echo "</br>";
echo "Cidade: " . $v_cidade . "\n";  
echo "</br>";
echo "Telefone: " . $v_telefone . "\n";  
echo "</br>";
echo "E-mail: " . $v_email . "\n";  
echo "</br>";
echo "Plano saúde " . $v_planosaude . "\n";  
echo "</br>";
echo "Carteira: " . $v_carteira . "\n";  
echo "</br>";
echo "Idade: " . $v_idade . "\n";  
?>
<div>Cliente incluído com sucesso !!!</div><p></p>
</body>
</html>
                

         