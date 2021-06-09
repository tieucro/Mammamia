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


global $pdo;
    $stmt = $pdo->prepare("SELECT id FROM funcionarios WHERE cpf = :cpf AND senha = :senha");
    $stmt->bindValue("cpf:",$cpf);
    $stmt->bindValue("senha:",$senha);
    $stmt->exeute();
    if($stmt->rowCount() > 0)
    {
        //entrar no sistema(sessao)
        $dado = $stmt->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        return true; //logado com sucesso
        echo "Conectado com Sucesso";
    }
    else
    {
return false; //não foi  possivel logar
echo "Não foi possivel logar";
}

header('Location: funcionario.php');
?>