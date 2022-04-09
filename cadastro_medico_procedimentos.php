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
    <?php include("medicosprocedimentos.php"); ?>
    <?php
    $medicosprocedimentos = new MedicosProcedimentos;

    $medicosprocedimentos->ConectaBD();
    $resultado = $medicosprocedimentos->listarMedico();
    $resultadoprocedimentos = $medicosprocedimentos->listarProcedimentos();
    ?>

    <!-- Fazendo formulario do Bootstrap 5 -->
    <form name="cadastromedico" action="cadastro_medico_procedimentos_ins.php" method="post">
        <div class="row">
            <div class="col-lg-3"></div>

                    <div class="form-group inputBottom">
                        <label for="nome">Médico:</label>
                        <div>
                            <select name="medicoid" id="medicoid">
                            <?php
                            while($res = mysqli_fetch_assoc($resultado))
                            { 
                            ?>
                                <option value="<?php echo $res['tbmedico_id'];?>" ><?php echo $res['tbmedico_nome'];?>
                                </option> 
                                <?php
                            } ?>
                            </select>

                    </div>
                    <div class="form-group inputBottom">
                        <label for="procedimento">Procedimento:</label>
                        <div>
                            <select name="tipoprocedimentoid" id="tipoprocedimentoid">
                            <?php
                            while($res = mysqli_fetch_assoc($resultadoprocedimentos))
                            { 
                            ?>
                                <option value="<?php echo $res['tbtipo_procedimento_id'];?>" ><?php echo $res['tbtipo_procedimento'];?>
                                </option> 
                                <?php
                            } ?>
                            </select>


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