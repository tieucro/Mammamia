<?php
session_start();
include 'banco.php';

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OpenRoad</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        crossorigin="anonymous"></script>

        <!-- FONTE
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

<!-- ESTILOS CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/imports.min.css">
    <link rel="stylesheet" href="css/mammamiaStore.min.css">
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-danger">
        <a class="navbar-brand" href="index.php">Mammamia</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#dc3545"><i
                class="fas fa-bars"></i></button>
        <!-- Barra de Pesquisa-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Procurar por..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Barra de Navegação-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="loginfuncionario.php">Logout</a>
                    
                </div>
            </li>
        </ul>
    </nav>
    <!-- Menu -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Página</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-step-backward"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">Lanches</div>
                        <a class="nav-link" href="pizzas.php">
                            <div class="sb-nav-link-icon" ><i class="fas fa-pizza-slice"></i></div>
                            Pizzas
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                        </div>
                        <a class="nav-link" href="bebidas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-wine-bottle"></i></div>
                            Bebidas
                        </a>
                    </div>
                    <div>
                        <a class="nav-link" href="funcionario.php">
                            <div class="sb-nav-link-icon"><i class="far fa-id-card"></i></div>
                            Aréa do Funcionario
                        </a>
                </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Mamamiaa
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Cadastro de Produtos</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Mamamiaa</li>
                    </ol>
                   <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Cadastro de Pizza</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" name="form_usuario" method="POST" action="cad_pizzas.php" >
            <div class="card-body">
              <div class="form-group">
                <label for="nome"><P>Quantidade</P></label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Escolha a quantidade de pizza para ser registrada" required>
              </div>
              <div class="form-group">
                <label for="tipo">Tipo de Pizza</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o Sabor da Pizza" required>
              </div>
              <div class="form-group">
                <label for="tamanho">Tamanho da Pizza</label>
                <input type="text" class="form-control" id="tamanho" name="tamanho" placeholder="Digite o tamanho da pizza" required>
              </div>
              <div class="form-group">
                <label for="preco">Preço da Pizza</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o Preço da Pizza" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
       
        </div>
    </div>

<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Cadastro de Bebidas</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" name="form_usuario" method="POST" action="cad_bebidas.php" >
            <div class="card-body">
              <div class="form-group">
                <label for="nome"><P>Quantidade</P></label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Escolha a quantidade de bebida para ser registrada" required>
              </div>
              <div class="form-group">
                <label for="tipo">Tipo de Bebida</label>
                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite o tipo de bebida. Ex:Suco" required>
              </div>
              <div class="form-group">
                <label for="sabor">Sabor da Bebida</label>
                <input type="text" class="form-control" id="sabor" name="sabor" placeholder="Digite o sabor da bebida" required>
              </div>
              <div class="form-group">
                <label for="preco">Preço da Bebida</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o Preço da Bebida" required>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
       
        </div>
    </div>
    </main>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>