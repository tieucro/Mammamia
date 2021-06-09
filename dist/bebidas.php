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
                    <a class="dropdown-item" href="#">Configuração</a>
                    <a class="dropdown-item" href="#">Registro de atividade</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.php">Logout</a>
                    
                </div>
            </li>
        </ul>
<!-- Carrinho -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link" id="bagShopping" href="sacola.php" role="button"><i class="fas fa-shopping-bag"></i> <span class="mammamiaCart_total"></span></a>
                <div class="mammamiaStore_container"></div>
        <div class="mammamiaStore_cart_container"></div>
                </li>
        </ul>
        </div>
        
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
                    <h1 class="mt-4">Bebidas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Mamamiaa</li>
                    </ol>

                        <!-- Products View -->
    <script id="products-template" type="x-template">
        <div class="column">
            <div class="mammamiaCart_shelfItem">
                <img src="" class="item_thumb"/>
                <div class="row">
                    <h5 class="item_name"></h5>
                    <div class="mammamiaStore_getDetail_container">
                        <span class="item_price"></span>
                    </div>
                    <div class="mammamiaStore_getDetail_container">
                        <a class="button u-pull-right mammamiaStore_getDetail">DETALHES</a>
                    </div>
                </div>

            </div>
        </div>
    </script>

    <!-- Product Detail View -->
    <script id="product-detail-template" type="x-template">
        <div class="mammamiaCart_shelfItem mammamiaStore_detailView">
            <a href="#" class="close view_close">&times;</a>

            <div class="row">
                <div class="four columns">
                    <img src="" class="item_thumb"/>
                </div>
                <div class="eight columns">
                    <h5 class="item_name"></h5>

                    <p class="item_description"></p>
                    <span class="item_price"></span>

                    <div class="qty">
                        <label>QUANTIDADE</label>
                        <input type="number" value="1" min="1" step="1" class="item_Quantity">
                    </div>
                    <div class="mammamiaStore_options"></div>
                    <a class="item_add button u-pull-right" href="javascript:;">Adicionar a Sacola</a>
                </div>
            </div>
        </div>
    </script>
    
    <!-- Error View -->
    <script id="error-template" type="x-template">
        <div class="error">
            <b>Desculpe, algo deu errado:(</b>
			<p class="error_text"></p>
			<a href="#" class="close alert_close">&times;</a>
        </div>
    </script>


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
<!-- Scripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/mammamiaCart.min.js"></script>
<script src="js/mammamiaStore.min.js"></script>

<script src="js/config.js"></script>
</html>