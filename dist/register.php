

<?php
session_start();
include 'banco.php';

?>
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
<body background="pizzas/piz04.jpg">
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
                                    <form role="form" name="form_usuarios" method="POST" action="cad_cliente.php" >
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="nome">Nome</label>
                                                    <input class="form-control py-4" id="nome" name="nome" type="text"
                                                        placeholder="Digite seu nome" maxlength="20" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="sobrenome">Sobrenome</label>
                                                    <input class="form-control py-4" id="sobrenome" name="sobrenome" type="text"
                                                        placeholder="Digite seu sobrenome" maxlength="20" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cpf">CPF</label>
                                            <input class="form-control py-4" id="cpf" name="cpf" type="text"
                                                aria-describedby="cpfHelp" placeholder="Insira seu CPF"
                                                autocomplete="off" maxlength="14" onkeyup="mascara_cpf()" required/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="endereco">Endereço</label>
                                            <input class="form-control py-4" id="endereco" name="endereco" type="text"
                                                aria-describedby="endereco" placeholder="Insira seu Endereço" maxlength="32" required/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="bairro">Bairro</label>
                                            <input class="form-control py-4" id="bairro" name="bairro" type="text"
                                                aria-describedby="bairro" placeholder="Insira seu Bairro" maxlength="32" required/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cep">CEP</label>
                                            <input class="form-control py-4" id="cep" name="cep" type="text"
                                                aria-describedby="cep" placeholder="Insira seu Cep" autocomplete="off" maxlength="9" onkeyup="mascara_cep()" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="numero">Numero da Residencia</label>
                                            <input class="form-control py-4" id="numero" name="numero" type="text"
                                                aria-describedby="endereço"
                                                placeholder="Insira o numero da residência" maxlength="8" required/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="estado">Estado</label>
                                            <input class="form-control py-4" id="estado" name="estado" type="text"
                                                aria-describedby="estado" placeholder="Insira seu Estado"
                                                maxlength="2" required/>
                                        </div>
                                        <div class="col-md-6"></div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cidade">Cidade</label>
                                            <input class="form-control py-4" id="cidade"  name="cidade" type="text"
                                                aria-describedby="cidade" placeholder="Insira sua Cidade" maxlength="20" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="email">Email</label>
                                            <input class="form-control py-4" id="email" name="email" type="email"
                                                aria-describedby="email" placeholder="Insira seu Email" maxlength="32" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="senha">Senha</label>
                                                    <input class="form-control py-4" id="senha" name="senha" type="password"
                                                        placeholder="Insira sua Senha" maxlength="15" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="confirmasenha">Confirme a
                                                        Senha</label>
                                                    <input class="form-control py-4" id="confirmasenha" name="confirmasenha"
                                                        type="password" placeholder="Confirmar a sua Senha" maxlength="15" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </form>
                                </div>
                                
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