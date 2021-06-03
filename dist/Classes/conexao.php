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


class  Usuario
{
    private $pdo;
    public $msgErro = "";
    
function conectar($nome, $host, $email, $senha){  

global $pdo;
try{
$pdo = new PDO("mysql:mammamia=".$nome.";host=".$host,$usuario,$senha);
}catch (PDOException $e){
    $msgErro = getMessage();
}

function cadastrar($nome, $sobrenome, $cpf, $endereco, $bairro, $cep, $numero, $estado, $cidade, $email, $senha){
//caso nao cadastrar

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
return true;//tudo ok
}
{
  global $pdo;
  //verificar se já existe email cadastrado
  $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
  $stmt->bindVALUE(":email",$email);
  $stmt->execute();
  if($stmt->rowC() > 0)
  return false;//ja cadastrado
 function logar($email, $senha)
{
global $pdo;
//verificar se o email e senha estao cadastrados, se sim
$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
$stmt->bindValue(":e",$email);
$stmt->bindValue(":s",$senha);
$stmt->execute();
if($stmt->rowCount() > 0)
{
}
}
}
}
}
 function logar($email, $senha){

  global $pdo;
  //verificar se o email e senha estao cadastrados, se sim
  $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
  $sql->bindValue(":e",$email);
  $sql->bindValue(":s",$senha);
  $sql->execute();
  if($sql->rowCount() > 0)
{
//entrar no sistema(sessao)
$dado = $sql->fetch();
session_start();
$_SESSION['id_usuario'] = $dado ['id_usuario'];
return true; //cadastrado com sucesso
}
else

{
  return false;//nao foi possivel logar
}
}
  
?>