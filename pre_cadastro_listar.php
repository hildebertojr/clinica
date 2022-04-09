<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar tipo de procedimentos</title>
</head>

<?php 
include("ConectaBD.php");
$cond = new ConectaBD;
$con = $cond->ConectarBanco();
$consulta = "select c.tbcliente_nome, m.tbmedico_nome, tp.tbtipo_procedimento , p.tbpre_cadastro_data,p.tbpre_cadastro_Hora  from tbpre_cadastro p
inner join  tbcliente c 
on p.tbcliente_id  = c.tbcliente_id 
inner join tbmedicos_procedimentos mp 
on p.tbmedicos_procedimentos_id  = mp.tbmedicos_procedimentos_id 
inner join tbmedico m
on mp.tbmedico_id  = m.tbmedico_id
inner join tbtipo_procedimento tp 
on mp.tbtipo_procedimento_id  = tp.tbtipo_procedimento_id"; 
$resultado = mysqli_query($con,$consulta); 

?>

<body>
<?php include 'cabecalho.php' ?>
<div>Listar pré-cadastro</div>
    <header>
    <table>
    <tr><th>Cliente</th><th>Médico</th><th>Procedimento</th><th>Data</th><th>Hora</th>
    </tr>
    <?php 
    while($dado = mysqli_fetch_assoc($resultado))
    {
    echo "<tr><td>". $dado['tbcliente_nome'] . "</td>
    <td>". $dado['tbmedico_nome'] ." </td>
    <td>". $dado['tbtipo_procedimento'] ." </td>
    <td>". $dado['tbpre_cadastro_data'] ." </td>
    <td>". $dado['tbpre_cadastro_Hora'] ." </td>";
    }
    ?>
    <table>
    </header>
</body>
</html>

