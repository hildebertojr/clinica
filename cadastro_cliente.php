<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Chamar o arquivo css externo -->
    <link rel="stylesheet" type="text/css" href="_css/style.css">

    <title>Cadastro cliente</title>
</head>
<!---->

<body>
    <header>
        <?php include 'cabecalho.php' ?>
        <!-- Fazendo formulario do Bootstrap 5 -->
        <form name="cadastrocliente" action="cadastro_cliente_ins.php" method="post">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form id="formExemplo" action="" method="post">
                        <div class="form-group inputBottom">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" id="nome" name="nome" placeholder="Digite seu nome(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="logradouro">Logradouro:</label>
                            <input class="form-control" type="text" id="logradouro" name="logradouro" placeholder="logradouro(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="numero">Numero:</label>
                            <input class="form-control" type="text" id="numero" name="numero" placeholder="numero(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="complemento ">Complemento:</label>
                            <input class="form-control" type="text" id="complemento" name="complemento" placeholder="complemento">
                        </div>
                        <div class="form-grou inputBottom">
                            <label for="cep">CEP:</label>
                            <input class="form-control" type="text" id="cep" name="cep" onkeypress="$(this).mask('00.000-000')" placeholder="000.00-000(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="bairro">Bairro:</label>
                            <input class="form-control" type="text" id="bairro" name="bairro" placeholder="bairro(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="cidade">Cidade:</label>
                            <input class="form-control" type="text" id="cidade" name="cidade" placeholder="Cidade(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="telefone">Telefone:</label> "
                            <input class="form-control" type="text" id="telefone" name="telefone" onkeypress="$(this).mask('(00) 0000-0000')" placeholder="(00)0000-0000 (Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="email">E-mail:</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="aaa@sss.com(Obrigatório)" required>
                        </div>
                        <div>
                            <label for="planosaudeemail" >Plano de Saúde:</label>
                            <select class="custom-select" name="planosaude">
                                <option selected>Plano de Saúde</option>
                                <option value="unimed">Unimed</option>
                                <option value="sulamericana">Sulamerica</option>
                                <option value="prevent">Prevent Senior</option>
                                <option value="cassi">Cassi</option>
                                <option value="cef">Caixa Economica</option>
                            </select>
                        </div>
                        <!-- <div class="form-group inputBottom">
                              <label for="planosaude">Plano de Saúde:</label>
                              <input class="form-control" type="text" id="planosaude" name="planosaude" placeholder="Plano de Saúde(Obrigatório)" required>
                        </div>-->
                        <div class="form-group inputBottom">
                            <label for="carteira">Carteira:</label>
                            <input class="form-control" type="text" id="carteira" name="carteira" placeholder="Carteira(Obrigatório)" required>
                        </div>
                        <div class="form-group inputBottom">
                            <label for="idade">Idade:</label>
                            <input class="form-control" type="text" id="idade" name="idade" placeholder="Idade(Obrigatório)" required>
                        </div>
                        <button class="btn btn-primary" type="submit" name="botao" id="botao">Cadastrar Dados</botao>
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