<?php
    //Conexão com bando de dados
    function connection(){
      

        $servername = "localhost";
        $username   = "root";
        $password   = "admin";
        $db         = "bd_mammamia";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão realizada com sucesso!";
        return $conn;

        } catch(PDOException $e) {
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }

class  Usuario
{
    private $pdo;
    public $msgErro = "";
    
function conectar($nome, $host, $email, $senha)  
{
global $pdo;
try{
$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
}catch (PDOException $e){
    $msgErro = getMessage();
}

function cadastrar($nome, $sobrenome, $cpf, $endereco, $bairro, $cep, $numero, $estado, $cidade, $email, $senha)

{
  global $pdo;
  //verificar se já existe email cadastrado
  $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
  $sql->bindVALUE(":e",$email);
  $sql->execute();
  if($sql->rowC() > 0)
  return false;//ja cadastrado
 function logar($email, $senha)
{
global $pdo;
//verificar se o email e senha estao cadastrados, se sim
$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
$sql->bindValue(":e",$email);
$sql->bindValue(":s",$senha);
$sql->execute();
if($sql->rowCount() > 0)
{
}
}
}
}
}
function logar($email, $senha)
{
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