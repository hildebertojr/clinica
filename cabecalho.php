<?php
// Inicia sessões
session_start();
if (isset($_SESSION["logado"])){
    if ($_SESSION["logado"] == 'S'){
        include 'cabecalho_logado.php';
    }
    else{
        include 'cabecalho_naologado.php';
    }
}
else{
    $_SESSION["logado"] = 'N';
    include 'cabecalho_naologado.php';
}


?>

