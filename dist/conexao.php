<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "mammamia";

// Criar conexão
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // Verificar a conexão
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com Sucesso";
} catch(PDOException $e) {
  echo "A conexão falhou: " . $e->getMessage();
}
class Usuario{ 


 public function logar($email, $senha){

  global $pdo;
  //verificar se o email e senha estao cadastrados, se sim
  $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
  $sql->bindValue(":email",$email);
  $sql->bindValue(":senha",md5($senha));
  $sql->execute();
  if($sql->rowCount() > 0)
{
//entrar no sistema(sessao)
$dado = $sql->fetch();
session_start();
$_SESSION['id'] = $dado ['id'];
return true; //Logado com sucesso
}
else

{
  return false;//nao foi possivel logar
}
}
}
header('Location: index.php');
?>