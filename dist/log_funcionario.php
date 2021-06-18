<?php
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

class Funcionario{ 


  public function logar($email, $senha){
 
   global $pdo;
   //verificar se o email e senha estao cadastrados, se sim
   $sql = $pdo->prepare("SELECT id FROM funcionarios WHERE cpf = :cpf AND senha = :senha");
   $sql->bindValue(":cpf",$cpf);
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

header ('Location: funcionario.php');
?>