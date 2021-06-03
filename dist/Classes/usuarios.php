<?php
class Usuario
{
    
}


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

 function cadastrar($nome, $sobrenome, $cpf, $endereco, $bairro, $cep, $numero, $estado, $cidade, $email, $senha)
{
global $pdo;
//verificar se já existe email cadastrado
$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
$sql->bindValue("email:",$email);
$sql->exeute();
if($sql->rowCount() > 0)
{
    return false; // ja esta cadastrado
}
else
{

}
//caso nao, Cadastrar
$sql = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, endereco, bairro, cep, numero, estado, cidade, email, senha)
VALUES (:nome, :sobrenome, :cpf, :endereco, :bairro, :cep, :numero, :estado, :cidade, :email, :senha)");
$sql->bindValue(":nome",$nome);
$sql->bindValue(":sobrenome",$sobrenome);
$sql->bindValue(":cpf",$cpf);
$sql->bindValue(":endereco",$endereco);
$sql->bindValue(":bairro",$bairro);
$sql->bindValue(":cep",$cep);
$sql->bindValue(":numero",$numero);
$sql->bindValue(":estado",$estado);
$sql->bindValue(":cidade",$cidade);
$sql->bindValue(":email",$email);
$sql->bindValue(":senha",md5($senha));
$sql->exeute();
return true;
}
 function logar($email, $senha)
{
    global $pdo;
    $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
    $sql->bindValue("email:",$email);
    $sql->bindValue("senha:",$senha);
    $sql->exeute();
    if($sql->rowCount() > 0)
    {
        //entrar no sistema(sessao)
        $dado = $sql->fetch();
        session_start();
        $_SESSION['id'] = $dado['id'];
        return true; //logado com sucesso
    }
    else
    {
return false; //não foi  possivel logar
    }
}



?>