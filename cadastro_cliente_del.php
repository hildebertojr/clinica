<?php


include("Cliente.php");
    

try {
  $cliente = new Cliente;
  $cliente->setId($_REQUEST['id']);
  
  $cliente->ConectaBD();
  $cliente->Excluir();

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
<div>Exclusão de clientes - Inclusão</div>
<div>Cliente excluido com sucesso !!!</div><p></p>
</body>
</html>
                

         