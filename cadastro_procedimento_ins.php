<?php

$procedimento= $_POST['procedimento'];

include("tipo_procedimento.php");
    

try {
  $tipoprocedimento = new TipoProcedimento;
  $tipoprocedimento->setProcedimento($procedimento);
  $tipoprocedimento->ConectaBD();
  $tipoprocedimento->Incluir();

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
<div>Cadastro do Médico - Inclusão</div>
<?php 
echo 'Procedimento: ' . $procedimento;
?>
<div>Tipo de procedimento incluído com sucesso !!!</div><p></p>
</body>
</html>
                

         