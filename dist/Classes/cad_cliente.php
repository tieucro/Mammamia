<?php
    include('Classes/banco.php');
    $conn = connection();
   
    

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

   
    //verificar se clicou no botao
if(isset($_POST['nome']))

$nome  = addcslashes($_POST['nome']);
$sobrenome = addcslashes($_POST['sobrenome']);
$cpf = addcslashes($_POST['cpf']);
$endereco = addcslashes($_POST['endereco']);
$bairro = addcslashes($_POST['bairro']);
$cep = addcslashes($_POST['cep']);
$numero = addcslashes($_POST['numero']);
$estado = addcslashes($_POST['estado']);
$cidade = addcslashes($_POST['cidade']);
$email = addcslashes($_POST['email']);
$senha = addcslashes($_POST['senha']);
$confirmarsenha = addcslashes($_POST['confirmarsenha']);
//verificar se o botao ta preenchido
if(!empty($nome) && !empty($sobrenome) && !empty($cpf) && !empty($endereco) && !empty($bairro) && !empty($cep) && !empty($numero) && !empty($estado) &&  !empty($cidade) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) 

?> 

