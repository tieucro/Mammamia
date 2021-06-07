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
   
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, endereco, bairro, cep, numero, estado, cidade, email, senha)
VALUES (:nome, :sobrenome, :cpf, :endereco, :bairro, :cep, :numero, :estado, :cidade, :email, :senha)");
$stmt->bindParam(":nome",$nome);
$stmt->bindParam(":sobrenome",$sobrenome);
$stmt->bindParam(":cpf",$cpf);
$stmt->bindParam(":endereco",$endereco);
$stmt->bindParam(":bairro",$bairro);
$stmt->bindParam(":cep",$cep);
$stmt->bindParam(":numero",$numero);
$stmt->bindParam(":estado",$estado);
$stmt->bindParam(":cidade",$cidade);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":senha",md5($senha));

    $nome           = $_POST['nome'];
    $sobrenome           = $_POST['sobrenome'];
    $cpf          = $_POST['cpf'];
    $endereco        = $_POST['endereco'];
    $bairro       = $_POST['bairro'];
    $cep           = $_POST['cep'];
    $numero           = $_POST['numero'];
    $estado           = $_POST['estado'];
    $cidade           = $_POST['cidade'];
    $email           = $_POST['email'];
    $senha           = $_POST['senha'];
    

    $stmt->execute();


    echo "Usuário cadastrado com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;


    header('Location: login.php');
?> 

