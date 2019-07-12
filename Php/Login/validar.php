<?php

$user = $_POST['usuario'];
$password = $_POST['senha'];

echo "POST";
var_dump($_POST);


echo "GET";
var_dump($_GET);

//Conexao ou recuperacao da conexao com o DB
//SUBMETER OS DADOS AO MODEL
//Controlar
//validar

if( $user == "admin"  && $password == "123456"){
  echo "<h1>Seja bem vindo (o) $user !</h1>";
  echo"<p>Senha: $password</p>";

}else{
  echo "<h1>Usuario e/ou senha invalidos!</h1>";
  echo "<a href=\"index.php\">Voltar</a>";
}
