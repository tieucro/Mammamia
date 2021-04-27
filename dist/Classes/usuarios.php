<?php

class  Usuario
{
    private $pdo;
    public $msgErro = "";
    
  public function conectar($nome, $host, $email, $senha)  
{
global $pdo;
try{
$pdo = new PDO("mysql:dbid=".$nome.";host=".$host,$usuario,$senha);
}catch (PDOException $e){
    $msgErro = $->getMessage();
}

public function cadastrar($nome, $sobrenome, $cpf, $endereco, $bairro, $cep, $numero, $estado, $cidade, $email, $senha, $confirmesenha)
)
{
  global $pdo;
  //verificar se já existe emial cadastrado
  $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
  $sql->bindVALUE(":e",$email);
  $sql->execute();
  if($sql->rowC() > 0)
  return false;//ja cadastrado
public function logar($email, $senha)
{

}

}
}

}




?>