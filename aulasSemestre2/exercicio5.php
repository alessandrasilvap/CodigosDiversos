<html>
<body>
<?php
define('Prestacoes', 5);
$valorCompra = $_POST['valorCompra'];
$numPrestacoes = $valorCompra / Prestacoes;

echo "O valor da compra é $valorCompra e é disponibilizado " . Prestacoes . " , número de prestações do valor.";
?>





<form action="" method="POST">
  <input type="number" placeholder="Digite o valor: " name="valorCompra"><br>
  <input type="submit" value="Enviar">
</form>
</body>
</html>
