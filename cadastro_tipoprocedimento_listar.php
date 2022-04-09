<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar tipo de procedimentos</title>
</head>

<body>

<div>Listar Tipo de Procedimentos</div>

<?php 
include("ConectaBD.php");
$cond = new ConectaBD;
$con = $cond->ConectarBanco();
$consulta = "select * from tbtipo_procedimento"; 
$resultado = mysqli_query($con,$consulta); 

?>


<table>
<tr><th>Id</th><th>Procedimeto</th>
</tr>
<?php 
while($dado = mysqli_fetch_assoc($resultado))
{
  echo "<tr><td>". $dado['tbtipo_procedimento_id'] . "</td><td>". $dado['tbtipo_procedimento'] ." </td>";
}
?>
<table>
</body>
</html>

