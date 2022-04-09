<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cliente</title>
</head>

<body>
<?php include 'cabecalho.php'?>
<div>Listar clientes</div>

<?php 
include("ConectaBD.php");
$cond = new ConectaBD;
$con = $cond->ConectarBanco();
$consulta = "select * from tbcliente"; 
$resultado = mysqli_query($con,$consulta); 

?>


<table>
<tr><th>ID</th><th>Nome</th><th>Logradouro</th><th>Número</th><th>Complemento</th>
<th>CEP</th>
<th>Visualizar</th>
<th>Excluir</th>
<th>Alterar</th>
</tr>
<?php 
while($dado = mysqli_fetch_assoc($resultado))
{
  echo "<tr><td>". $dado['tbcliente_id'] . "</td><td>". $dado['tbcliente_nome'] ." </td>"
  . "</td><td>". $dado['tbcliente_logradouro'] ." </td>"
  . "</td><td>". $dado['tbcliente_numero'] ." </td>"
  . "</td><td>". $dado['tbcliente_complemento'] ." </td>"
  . "</td><td>". $dado['tbcliente_cep'] ." </td>"
  . "</td><td><a href='cadastro_cliente_detalhar.php?id=".  $dado['tbcliente_id'] . "'>Visualizar<"."/a></td>"
  . "</td><td><a href='cadastro_cliente_del.php?id=".  $dado['tbcliente_id'] . "'>Excluir<"."/a></td>"
  . "</td><td><a href='cadastro_cliente_recupera_alt.php?id=".  $dado['tbcliente_id'] . "'>Alterar<"."/a></td>";
}
?>
<table>
</body>
</html>

