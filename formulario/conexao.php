<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "form";

//Criando conexão
$conn = new mysqli($servername, $username, $password, $bdname);

//Verificando a conexão
if ($conn->conect_error) {
  die("Falha na conexão: " . $conn->conect_error);
}
?>
