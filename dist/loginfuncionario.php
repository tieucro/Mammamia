<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>OpenRoad</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>

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

    </head>

<body background="https://www.alegrafoods.com.br/wp-content/uploads/2020/07/9-img-blog.png">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4"><b>Login</b></h3>
                                    <h4 class="text-center font-weight-light my-4"><b>Funcionário</b></h4>
                                </div>


                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label class="small mb-1" for="cpf">CPF</label>
                                            <input class="form-control py-4" id="cpf" type="text"
                                                aria-describedby="cpfHelp" placeholder="Ensirir CPF"
                                                autocomplete="off" maxlength="14" onkeyup="mascara_cpf()" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Senha</label>
                                            <input class="form-control py-4" id="inputPassword" type="password"
                                                placeholder="Digite sua Senha" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Manter
                                                    Senha</label>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Esqueceu a senha?</a>
                                            <a class="btn btn-primary" href="index.php">Login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="registerfuncionario.php">Não possui conta? Registre-se!</a></div>
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
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
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