<html>
<body>
<?php
$quantDolar = $_POST['quantDolar'];
$contacaoDolar = $_POST['contacaoDolar'];

$reais = $quantDolar * $contacaoDolar;

echo "Você têm U$ $quantDolar e atualmente o Dólar está U$ $contacaoDolar. Portanto em reais você têm $reais.";
?>





<form action="" method="POST">
  Digite a quantidade de dólares guardados: <input type="number" name="quantDolar"><br>
  Digite a cotação do dólar atualmente: <input type="number" name="contacaoDolar"><br>

  <input type="submit" value="Enviar">
</form>
</body>
</html>
