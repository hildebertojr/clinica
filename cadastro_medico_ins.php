<?php

$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$crm = $_POST['crm'];


include("medico.php");
    

try {
  $medico = new Medico;
  $medico->setNome($nome);
  $medico->setEspecialidade($especialidade);
  $medico->setCrm($crm);
  $medico->ConectaBD();
  $medico->Incluir();

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
echo 'Nome: ' . $nome;
echo "</br>";
echo 'Especialidade: ' . $especialidade . "\n";
echo "</br>";
echo 'CRM: ' . $crm . "\n";
echo "</br>";

?>
<div>Médico incluído com sucesso !!!</div><p></p>
</body>
</html>
                

         