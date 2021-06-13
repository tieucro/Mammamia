<?php
    //conexão com o banco de dados
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
   
    $stmt = $conn->prepare("INSERT INTO pizzas (quantidade, tipo, tamanho, preco)
VALUES (:quantidade, :tipo, :tamanho, :preco)");
$stmt->bindParam(":quantidade",$quantidade);
$stmt->bindParam(":tipo",$tipo);
$stmt->bindParam(":tamanho",$tamanho);
$stmt->bindParam(":preco",$preco);

    $quantidade           = $_POST['quantidade'];
    $tipo           = $_POST['tipo'];
    $tamanho          = $_POST['tamanho'];
    $preco           = $_POST['preco'];
   
    

    $stmt->execute();

    echo "Pizza cadastrada com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;



    header('Location: funcionario.php');
?> 

