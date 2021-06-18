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


?>