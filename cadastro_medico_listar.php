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
<div>Listar Médicos</div>

<?php 
include("ConectaBD.php");
$cond = new ConectaBD;
$con = $cond->ConectarBanco();
$consulta = "select * from tbmedico"; 
$resultado = mysqli_query($con,$consulta); 

?>


<table>
<tr><th>ID</th><th>Nome</th><th>Especialidade</th><th>CRM</th>
</tr>
<?php 
while($dado = mysqli_fetch_assoc($resultado))
{
  echo "<tr><td>". $dado['tbmedico_id'] . "</td><td>". $dado['tbmedico_nome'] ." </td>"
  . "</td><td>". $dado['tbmedico_especialidade'] ." </td>"
  . "</td><td>". $dado['tbmedico_crm'] ." </td>";
}
?>
<table>
</body>
</html>

