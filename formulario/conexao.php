<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "form";

$conn = new mysqli($servername, $username, $password, $bdname);

if ($conn -> conect_error) {
  die("Falha na conexão: " . $conn -> conect_error);
} else {
  echo "Conectado com sucesso!";
}

$conn -> close();
?>
