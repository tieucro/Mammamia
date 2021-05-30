<?php
    include('Classes/banco.php');
    $conn = connection();

    try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, endereco, bairro, cep, numero, estado, cidade, email, senha)
VALUES (:nome, :sobrenome, :cpf, :endereco, :bairro, :cep, :numero, :estado, :cidade, :email, :senha)");
$stmt->bindValue(":nome",$nome);
$stmt->bindValue(":sobrenome",$sobrenome);
$stmt->bindValue(":cpf",$cpf);
$stmt->bindValue(":endereco",$endereco);
$stmt->bindValue(":bairro",$bairro);
$stmt->bindValue(":cep",$cep);
$stmt->bindValue(":numero",$numero);
$stmt->bindValue(":estado",$estado);
$stmt->bindValue(":cidade",$cidade);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":senha",md5($senha));

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

    
?> 