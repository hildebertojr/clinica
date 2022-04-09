<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chamar o arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="_css/style.css">

    <title>Cadastro Médico</title>
</head>
<!---->
<body>
    <header>
    <?php include 'cabecalho.php' ?>
    <?php include("precadastro.php"); ?>
    <?php include 'acesso.php' ?>
    <?php
    $precadastro = new PreCadastro;
    $precadastro->ConectaBD();
    $resultadocliente = $precadastro->listarClientes();
    $resultadomedico = $precadastro->listarMedico();
    ?>

    <!-- Fazendo formulario do Bootstrap 5 -->
    <form name="cadastromedico" action="pre_cadastro_ins.php" method="post">
        <div class="row">
            <div class="col-lg-3"></div>

                    <div class="form-group inputBottom">
                        <label for="cliente">Cliente:</label>
                        <div>
                            <select name="clienteid" id="clienteid">
                            <?php
                            while($res = mysqli_fetch_assoc($resultadocliente))
                            { 
                            ?>
                                <option value="<?php echo $res['tbcliente_id'];?>" ><?php echo $res['tbcliente_nome'];?>
                                </option> 
                                <?php
                            } ?>
                            </select>

                    </div>
                    
                    <div class="form-group inputBottom">
                        <label for="medico">Médico/Procedimento:</label>
                        <div>
                            <select name="procedimentoid" id="procedimentoid">
                            <?php
                            while($resmedico = mysqli_fetch_assoc($resultadomedico))
                            { 
                            ?>
                                <option value="<?php echo $resmedico['tbmedicos_procedimentos_id'];?>" ><?php echo $resmedico['tbmedico_nome'] ."-" . $resmedico['tbtipo_procedimento'] ;?>
                                </option> 
                                <?php
                            } ?>
                            </select>

                    </div>
                    <div class="form-group inputBottom">
                        <label for="data">Data : Ex: AAAA/MM/DD</label>
                        <input class="form-control" type="text" id="data" name="data"  required>
                    </div>
                    <div class="form-group inputBottom">
                        <label for="hora"> Hora: Ex: 08:00</label>
                        <input class="form-control" type="hora" id="hora" name="hora" required>
                    </div>
                    <button class="btn btn-primary" type="submit" name="botao" id="botao">Cadastrar Dados</botao>

            </div>
    </form>
    </header>

    <script>
        $(document.ready(function() {
                    $("#formExemplo").validate({
                        rules: {
                            nome: {
                                require: true,
                                minlength: 10,
                                maxlength: 30

                            },
                            email: {
                                require: true,
                                email: true
                            }
                        }
                    })
                }))
    </script>
</body>
</html>