<?php
    //conexão com o banco de dados
    //Conexão com bando de dados

   //$servername = "sql204.epizy.com";
  //$username   = "epiz_28866001";
   //$password   = "5njYlLm7m1x";
   //$db         = "epiz_28866001_mammamia";


$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "mammamia";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com Sucesso";
} catch(PDOException $e) {
  echo "A conexão falhou: " . $e->getMessage();
}
   
    

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
   
    $stmt = $conn->prepare("INSERT INTO bebidas (quantidade, tipo, sabor, preco)
VALUES (:quantidade, :tipo, :sabor, :preco)");
$stmt->bindParam(":quantidade",$quantidade);
$stmt->bindParam(":tipo",$tipo);
$stmt->bindParam(":sabor",$sabor);
$stmt->bindParam(":preco",$preco);

    $quantidade           = $_POST['quantidade'];
    $tipo           = $_POST['tipo'];
    $sabor          = $_POST['sabor'];
    $preco           = $_POST['preco'];
   
    

    $stmt->execute();

    echo "Bebida cadastrada com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;



    header('Location: funcionario.php');
?> 

