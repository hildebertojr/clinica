<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhar cliente</title>
</head>

<body>
<?php include 'cabecalho.php'?>
<div>Detalhar cliente</div>

<?php 
 
$id = (int) $_REQUEST['id'];
include("ConectaBD.php");
$cond = new ConectaBD;
$con = $cond->ConectarBanco();
$consulta = "select * from tbcliente where tbcliente_id = " . $id; 
$resultado = mysqli_query($con,$consulta); 

?>

<table>

<?php 
while($dado = mysqli_fetch_assoc($resultado))
{
  echo "
    <tr>
    <td> Id </td>
    <td>". $dado['tbcliente_id']   . "</td>
    </tr>
    <tr>
    <td> Nome </td>
    <td>". $dado['tbcliente_nome'] ." </td>
    </tr>
    <tr>
    <td> Logradouro </td>
    <td>". $dado['tbcliente_logradouro'] ." </td>
    </tr>
    <tr>
    <td>Numero</td>
    <td>". $dado['tbcliente_numero'] ." </td>
    </tr>
    <tr>
    <td>Complemento </td>
    <td>". $dado['tbcliente_complemento'] ." </td>
    </tr>
    <tr>
    <td>CEP</td>
    <td>". $dado['tbcliente_cep'] ." </td>
    </tr>";
}
?>
<table>
</body>
</html>