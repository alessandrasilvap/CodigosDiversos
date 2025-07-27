<?php
require_once('conexao.php'); //Inclui a conexão com o banco de dados


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtém os dados do formulário
    $matricula = strip_tags($_POST['matricula']);
    $nome = strip_tags($_POST['nome']);
    $email = strip_tags($_POST['email']);
    $senha_digitada = $_POST['senha'];

    //Validações
    if (empty($matricula) || empty($nome) || empty($email) || empty($senha_digitada)) {
        echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
        exit;
    }

    //Hash da senha ANTES de salvar no banco de dados
    $senha_hashed = password_hash($senha_digitada, PASSWORD_DEFAULT);

    //Prepara e executa a inserção dos dados (com a senha hasheada)
    $stmt = $conn->prepare("INSERT INTO usuario (matricula, nome, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $matricula, $nome, $email, $senha_hashed);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso! Agora você pode fazer login.'); window.location.href='form.php';</script>";
        exit;
    } else {
        //Erro: pode ser matrícula duplicada, etc.
        echo "<script>alert('Erro ao cadastrar: " . $conn->error . "'); window.history.back();</script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
