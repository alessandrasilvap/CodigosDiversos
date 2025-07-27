<!DOCTYPE html>
<html lang="pt-br">
<body>
  <h1>Login no Sistema</h1>
  <p>Preencha os dados a seguir para entrar no sistema</p>
  <br>
  <form action="index.php" method="POST" name="login">
    E-mail: <input type="email" name="email" required>
    Senha: <input type="password" name="senha" required>
    <input type="checkbox"> Lembrar e-mail
    <br><br>
    <input type="submit" value="Entrar">
  </form>
  <br>
  <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
</body>
</html>
