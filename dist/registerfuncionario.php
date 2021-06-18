<?php
session_start();
include 'banco.php';

?>

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
    <!-- Macara do Telefone-->
    <script>
        function mascara_fone() {
            var fone = document.getElementById('telefone')
            if (fone.value.length == 2) {
                fone.value += " "
            } else if (fone.value.length == 5) {
                fone.value += " "
            }
            if (fone.value.length == 11) {
                fone.value += "-"
            }
        }
    </script>


</head>

<body background="pizzas/piz02.jpg">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Cadastro do Funcionário</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" name="form_funcionarios" method="POST" action="cad_funcionario.php" >
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
                                                aria-describedby="cpfHelp" placeholder="Ensirir CPF"
                                                autocomplete="off" maxlength="14" onkeyup="mascara_cpf()" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="telefone">Telefone</label>
                                            <input class="form-control py-4" id="telefone" name="telefone" type="text"
                                                aria-describedby="telefone" placeholder="Ensirir numero de celular"
                                                autocomplete="off" maxlength="16" onkeyup="mascara_fone()" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4"  id="email" name="email"
                                                aria-describedby="email" placeholder="Ensirir Email" maxlength="32" required/>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="senha">Senha</label>
                                                    <input class="form-control py-4"id="senha" name="senha" type="password"
                                                        placeholder="Ensirir Senha" maxlength="15" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="confirmasenha">Confirme a
                                                        Senha</label>
                                                    <input class="form-control py-4" id="confirmasenha" name="confirmasenha"
                                                        type="password" placeholder="Confirme sua Senha" maxlength="15" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0"> <button type="submit" class="btn btn-primary btn-block">Cadastrar</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="loginfuncionario.php">Já possui conta? Ir para
                                            login</a></div>
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