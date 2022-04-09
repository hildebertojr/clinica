<?php
// Inicia sessões
session_start();

$_SESSION["email"] = $_POST['email'];
$_SESSION["senha"] = $_POST['senha'];

if ($_SESSION["email"]  == 'email@email.com' and $_SESSION["senha"] == '123'){
    $_SESSION["logado"] = 'S';
   header ("location: index.php");
}
else{
    $_SESSION["logado"] = 'N';
   header ("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chamar o arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <title></title>
</head>

</html>