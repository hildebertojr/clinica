<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chamar o arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="_css/style.css">

    <title>Login</title>
</head>
<!---->
<body>
    <header>
    <?php include 'cabecalho.php' ?>
    <!-- Fazendo formulario do Bootstrap 5 -->
    <form name="cadastromedico" action="login_validar.php" method="post">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form id="formExemplo" action="" method="post">
                    <div class="form-group inputBottom">
                        <label for="e-mail">E-mail:</label>
                        <input class="form-control" type="text" id="email" name="email" required>
                    </div>
                    <div class="form-group inputBottom">
                        <label for="senha">Senha:</label>
                        <input class="form-control" type="password" id="senha" name="senha" required>
                    </div>

                    <button class="btn btn-primary" type="submit" name="botao" id="botao">Login</botao>
                </form>
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