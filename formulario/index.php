<?php
$enviar = isset($_POST['Enviar']) ? $_POST['Enviar'] : null;

if ($enviar == 'Enviar') {
  $stmt = $conn -> prepara ("SELECT nome, email, senha FROM usuario WHERE email = :email AND senha = :senha");

  $stmt->bindParam(':email', $email,
//aqui tem ue fazer as validações
//sessão
?>
