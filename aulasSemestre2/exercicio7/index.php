<html>
<body>
  <form action="salvar.php? action=save" method="POST" name="meuForm">
    Nome: <input type="text" name="campoNome"><br>
    Idade: <input type="text" name="campoIdade"><br>
    E-mail: <input type="text" name="campoEmail">
    <br>
    Sexo: <input type="radio" name="campoSexo" value="M">Masculino 
          <input type="radio" name="campoSexo" value="F">Feminino
    <br>
    Curso: 
    <select name="campoCurso">
      <option selected>Selecione...</option>
      <option>Ciência da Computação</option>
      <option>Bacharelado em Informática</option>
      <option>Engenharia da Computação</option>
    </select>
    <br>
    Conhecimentos:
    <input type="checkbox" name="campoConhecimentos[]" value="Word">Microsoft Word
    <input type="checkbox" name="campoConhecimentos[]" value="html">HTML
    <input type="checkbox" name="campoConhecimentos[]" value="js">JavaScript
    <input type="checkbox" name="campoConhecimentos[]" value="php">PHP
    <br>
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
