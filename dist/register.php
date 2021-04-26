<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>OpenRoad</title>
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Macara do CPF-->
    <script>
        function mascara_cpf() {
            var cpf = document.getElementById('cpf')
            if (cpf.value.length == 3 || cpf.value.length == 7) {
                cpf.value += "."
            } else if (cpf.value.length == 11) {
                cpf.value += "-"
            }
        }
    </script>
    <!-- Macara do Cep-->
    <script>
        function mascara_cep() {
            var cep = document.getElementById('cep')
            if (cep.value.length == 5) {
                cep.value += "-"
            }
        }
    </script>


</head>

<body background="https://www.alegrafoods.com.br/wp-content/uploads/2020/07/9-img-blog.png">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Cadastre-se</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="nome">Nome</label>
                                                    <input class="form-control py-4" id="nome" type="text"
                                                        placeholder="Digite seu nome" maxlength="20"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sobrenome">Sobrenome</label>
                                                    <input class="form-control py-4" id="sobrenome" type="text"
                                                        placeholder="Digite seu sobrenome" maxlength="20"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cpf">CPF</label>
                                            <input class="form-control py-4" id="cpf" type="text"
                                                aria-describedby="cpfHelp" placeholder="Ensira seu CPF"
                                                autocomplete="off" maxlength="14" onkeyup="mascara_cpf()" />
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="endereco">Endereço</label>
                                            <input class="form-control py-4" id="endereco" type="text"
                                                aria-describedby="endereçoHelp" placeholder="Ensira seu Endereço" maxlength="32"/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="bairro">Bairro</label>
                                            <input class="form-control py-4" id="bairro" type="text"
                                                aria-describedby="bairroHelp" placeholder="Ensira seu Bairro" maxlength="32"/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cep">CEP</label>
                                            <input class="form-control py-4" id="cep" type="text"
                                                aria-describedby="cepHelp" placeholder="Ensira seu Cep" maxlength="9"
                                                onkeyup="mascara_cep()" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="numero">Numero da Residencia</label>
                                            <input class="form-control py-4" id="numero" type="text"
                                                aria-describedby="endereçoHelp"
                                                placeholder="Ensira o numero da residência" maxlength="8"/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="estado">Estado</label>
                                            <input class="form-control py-4" id="estado" type="text"
                                                aria-describedby="estadoHelp" placeholder="Ensira seu Estado" /
                                                maxlength="2">
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cidade">Cidade</label>
                                            <input class="form-control py-4" id="cidade" type="text"
                                                aria-describedby="cidadeHelp" placeholder="Ensira sua Cidade" maxlength="20"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="email">Email</label>
                                            <input class="form-control py-4" id="email" type="email"
                                                aria-describedby="emailHelp" placeholder="Ensira seu Email" maxlength="32"/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="senha">Senha</label>
                                                    <input class="form-control py-4" id="senha" type="password"
                                                        placeholder="Ensira sua Senha" maxlength="15"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="confirmesenha">Confirme a
                                                        Senha</label>
                                                    <input class="form-control py-4" id="confirmesenha"
                                                        type="password" placeholder="Confirme sua Senha" maxlength="15"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block"
                                                href="login.php">Criar Conta</a></div>
                                    </form>
                                </div>
                                <?php
                                
                                
                                
                                
                                ?>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.php">Já possui conta? Ir para login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacidade e Politica</a>
                            &middot;
                            <a href="#">Termos &amp; Condições</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>