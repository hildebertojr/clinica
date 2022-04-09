<?php
$medicoid = (int) $_POST['medicoid'];
$tipoprocedimentoid = $_POST['tipoprocedimentoid'];


include("medicosprocedimentos.php");
    

try {
  $medicosprocedimentos = new MedicosProcedimentos;
  $medicosprocedimentos->setTipoProcedimentoId($tipoprocedimentoid);
  $medicosprocedimentos->setMedicoId($medicoid);
  $medicosprocedimentos->ConectaBD();
  $medicosprocedimentos->Incluir();

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
<div>Cadastro do Médicos vs Procedimentos - Inclusão</div>

<div>Médicos vs Procedimentos incluídos com sucesso !!!</div><p></p>
</body>
</html>
                

         