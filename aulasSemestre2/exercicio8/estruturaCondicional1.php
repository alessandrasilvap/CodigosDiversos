<html>
<body>
  <?php
  //Leia  dois números, calcule a soma deles e se o resultado da soma for maior que 10, então imprima o resultado.
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $formValid = true;

  if (is_NaN($n1, $n2)) {
    echo "Os campos devem ser preenchids por números";
    $formValid = false;
  }

  $soma = $n1 + $n2;
  if ($soma > 10) {
    echo $soma;
  } else {
    echo "O resultado não alcançou o necessário.";
  }
  ?>





  <form action="" method="POST">
    <input type="number" name="n1"><br>
    <input type="number" name="n2"><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
