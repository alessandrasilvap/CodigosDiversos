<html>
<body>
  <?php
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  
  echo "Seu nome é $nome <br>";
  
  if ($idade <= 17) {
  echo "Você tem $idade anos. Você é menor de idade.<br>";
  } else {
  echo "Você tem $idade anos. Você é maior de idade.";
  }
  ?>




  
  <h2>Cadastro de Usuário</h2>
      <hr>
      <br>
      <form action="" method="post">
      <label>Nome Completo:</label>
      <input type="text" name="nome" placeholder="Digite...">
      <br>
      <label>Idade:</label>
      <input type="number" name="idade" minlength = "1" maxlength = "3">
      <br>
      <button type="reset">Limpar</button> <button type="submit" Enviar</button>
  </form>
</body>
</html>
