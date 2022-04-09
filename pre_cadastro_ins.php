<?php

$clienteid = $_POST['clienteid'];
$tbmedicos_procedimentos_id = $_POST['procedimentoid'];
$data = $_POST['data'];
$hora = $_POST['hora'];

include("precadastro.php");
    
try {
    $precadastro = new PreCadastro;
    $precadastro -> setMedicosProcedimentosId($tbmedicos_procedimentos_id);
    $precadastro -> setClienteId($clienteid);
    $precadastro -> setPreCadastroHora($hora);
    $precadastro -> setPreCadatroData($data);
    $precadastro->ConectaBD();
    $precadastro->Incluir();

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
<div>Pré-cadastro - Inclusão</div>
  
<div>Incluído com sucesso !!!</div><p></p>
</body>
</html>
                

         