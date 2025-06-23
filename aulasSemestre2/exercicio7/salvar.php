<?php
/*Request reune o conteúdo das supervariáveis $_POST, $_GET e $_COOKIES. A vantagem é que, independente do 
método de envio dosdados de um formulário, é possível acessar o campo por seu nome utilizando essa  
supervariável. A desvantagem é que, havendo mais de um formulário na requisição e havendo campos de mesmo
nome, a ordem com que a informação é sobreescrita nessa variável pode causar inconsistências para o programador, 
mesmo que essa ordem possa ser definida nas configurações do servidor pela variável request*/
if ($_REQUEST['action'] == "save") {
  $formValid = true;
  $tamanho_nome = strlen($_POST['campoNome']);

  if ($tamanho_nome < 5 || $tamanho_nome > 64) {
    echo "O campo \'Nome\' deve ter entre 5 e 64 caracteres. Você colocou $tamanho_nome.";
    $formValid = false;
  }

  $idade = $_POST['campoIdade'];
  //is_NaN(is Not a Number) informa que o valor passado não é um número
  if (is_NaN($idade) || $idade < 4 || $idade > 120) {
    echo "O campo \'Idade\' deve ser preenchido corretamente.";
    $formValid = false;
  }

  $email = $_POST['campoEmail'];
  $regex = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";
  if (!preg_match($regex, $email)) {
    echo "O campo \'E-mail\' deve ser preenchido corretamente.";
    $formValid = false;
  }

  $sexo = $_POST['campoSexo'];
  if ($sexo != "M" && $sexo != "F") {
    echo "O campo \'Sexo\' deve ser preenchido";
    $formValid = false;
  }

  $curso = $_POST['campoCurso'];
  if ($curso == "" || $curso == "Selecione...") {
    echo "O campo \'Curso\' deve ser preenchido";
    $formValid = false;
  }

  $conhecimentos = $_POST['campoConhecimento'];
  if (sizeof($conhecimentos)) {
    echo "É necessário marcar 2 conhecimentos.";
    $formValid = false;
  }

  if($formValid) {
    echo "Formulário validado com sucesso!";
    exit();
  }
}
?>      
