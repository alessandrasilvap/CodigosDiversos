<html>
<body>
  <?php
  //Faça um programa que receba dois números e mostre o maior
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];

  if ($n1 > $n2) {
    echo $n1;
  } elseif ($n2 > $n1) {
    echo $n2;
  } else {
    echo "Números iguais, para uma comparação de maior/menor coloque números diferentes";
  }
  ?>




  
  <form action="" method="POST">
    <h2>Imprimindo o maior número</h2>
    <input type="number" name="n1"><br>
    <input type="number" name="n2"><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
