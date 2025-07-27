<?php
//Inicia a sessão no início
session_start();
//Inclui a conexão com o banco de dados
require_once('conexao.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = strip_tags($_POST['email']);
    $senha_digitada = $_POST['senha'];

    //Validações
    if (empty($email) || empty($senha_digitada)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit;
    }

    //Prepara uma instrução SQL para evitar injeção de SQL
    //A coluna 'senha' no BD deve conter o HASH da senha (definida no cadastro.php)
    $stmt = $conn->prepare("SELECT nome, email, senha FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        //Verifica a senha: compara a senha digitada com o HASH armazenado no BD
        if (password_verify($senha_digitada, $user['senha'])) {
            //Senha correta
            $_SESSION['usuario'] = $user['nome'];
            $_SESSION['email'] = $user['email'];

            //Redireciona para a página principal
            header('Location: principal.php');
            exit;
        } else {
            //Senha incorreta
            echo "<script>alert('Senha incorreta. Tente novamente.'); window.history.back();</script>";
            exit;
        }
    } else {
        //Nenhum usuário encontrado com esse e-mail
        echo "<script>alert('Conta não encontrada. Verifique seu e-mail.'); window.history.back();</script>";
        exit;
    }

    $stmt->close();
    $conn->close(); //Fecha a conexão após o uso neste script
}
?>
