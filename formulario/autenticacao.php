<?php
session_start();
if(!isset($_SESSION['usuario'])) { //Verifica se a variável de sessão 'usuario' NÃO está definida
    header('location: form.php'); //Redireciona para o formulário de login se não estiver logado
    exit;
}
?>
