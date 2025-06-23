<html>
<body>
  <?php
  /*Faça um programa que receba duas notas de um aluno calcule e mostre a média aritmética. Se a media 
  for maior que 7, deverá imprimir aluno aprovado*/
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $media = ($nota1 + $nota2) / 2;

  if ($media > 7) {
    echo "Aprovado.";
  } else {
    echo "Reprovado.";
  }
  ?>




  
  <form action="" method="POST">
    <input type="number" name="nota1"><br>
    <input type="number" name="nota2"><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
