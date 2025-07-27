<body>
    <h1>Formulário de Cadastro</h1>
    <p>Preencha os dados a seguir para criar sua conta no sistema</p>
    <br>
    <form action="indexcadastro.php" method="POST" name="cadastro">
        Matrícula: <input type="text" name="matricula" required><br><br>
        Nome: <input type="text" name="nome" required><br><br>
        E-mail: <input type="email" name="email" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
    <br>
    <p>Já tem uma conta? <a href="form.php">Faça Login</a></p>
</body>
</html>
