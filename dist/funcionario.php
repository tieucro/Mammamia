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
                        <a class="nav-link" href="cad_produtos.php">
                            <div class="sb-nav-link-icon"><i class="far fa-id-card"></i></div>
                            Cadastro de Produtos
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
                    <h1 class="mt-4">Aréa do Funcionario</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Mamamiaa</li>
                    </ol>
                   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php
            
            if (isset($_SESSION['msg_del'])){
              $mensagem = $_SESSION['msg_del'];
              echo "
              <script>
                window.onload = function(){
                  toastr.error('$mensagem')
                } 
              </script>";
            }
            
            session_unset();
            
        ?>

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gerênciamento de Pizzas</h3>
                
                <small class="float-right"><a href="cad_produtos.php"> <button type="button" class="btn btn-block btn-primary">Adicionar Produto</button></a></small>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Quantidade</th>
                    <th>Tipo</th>
                    <th>tamanho</th>
                    <th>preco</th>
                    <th>Editar Dados</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php
                    
                    include "banco.php";
                   

                    try {
                    
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM pizzas");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $k=>$v) {
                        //echo $v;
                        //var_dump($v);
                        echo '<tr>';
                        echo '<td>'.$v['id'].'</td>';
                        echo '<td>'.$v['quantidade'].'</td>';
                        echo '<td>'.$v['tipo'].'</td>';
                        echo '<td>'.$v['tamanho'].'</td>';
                        echo '<td>'.$v['preco'].'</td>';
                        echo '<td style="text-align:center"> 
                              <a class="btn btn-primary btn-sm" href="vis_dist.php?id='.$v['id'].'"><i class="fas fa-folder"></i></a>
                              <a class="btn btn-info btn-sm" href="edt_dist.php?id='.$v['id'].'"><i class="fas fa-pencil-alt"></i></a>                            
                              <a class="btn btn-danger btn-sm" href="delete.php?id='.$v['id'].'" data-href="delete.php?id='.$v['id'].'" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i></a>                                                 
                              </td>';
                        echo '</tr>';


                    }
                    } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    //echo "</table>";
                ?>

                  </tbody>                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        



            



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  



<div class="modal fade" id="confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Confirmar Exclusão</h4>
       
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir essa Pizza?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-outline-light btn-ok">Sim! Quero excluir.</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

                </div>
        </div>
        

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gerênciamento de Bebidas</h3>
                
                <small class="float-right"><a href="cad_produtos.php"> <button type="button" class="btn btn-block btn-primary">Adicionar Produto</button></a></small>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Quantidade</th>
                    <th>Tipo</th>
                    <th>Sabor</th>
                    <th>preco</th>
                    <th>Editar Dados</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <?php
                    
                    include "banco.php";
                   

                    try {
                    
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("SELECT * FROM bebidas");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $k=>$v) {
                        //echo $v;
                        //var_dump($v);
                        echo '<tr>';
                        echo '<td>'.$v['id'].'</td>';
                        echo '<td>'.$v['quantidade'].'</td>';
                        echo '<td>'.$v['tipo'].'</td>';
                        echo '<td>'.$v['sabor'].'</td>';
                        echo '<td>'.$v['preco'].'</td>';
                        echo '<td style="text-align:center"> 
                              <a class="btn btn-primary btn-sm" href="vis_dist.php?id='.$v['id'].'"><i class="fas fa-folder"></i></a>
                              <a class="btn btn-info btn-sm" href="edt_dist.php?id='.$v['id'].'"><i class="fas fa-pencil-alt"></i></a>                            
                              <a class="btn btn-danger btn-sm" href="delete.php?id='.$v['id'].'" data-href="delete.php?id='.$v['id'].'" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i></a>                                                 
                              </td>';
                        echo '</tr>';


                    }
                    } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    //echo "</table>";
                ?>

                  </tbody>                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        



            



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  



<div class="modal fade" id="confirm-delete">
  <div class="modal-dialog">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title">Confirmar Exclusão</h4>
       
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja excluir essa Bebida?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-outline-light btn-ok">Sim! Quero excluir.</a>

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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