<html>
<body>
  <?php
  $valorHora = $_POST['valorHora'];
  $valorHoraExtra = $_POST['valorHoraExtra'];
  $horasNormais = $_POST['horasNormais']; 
  $horasExtras = $_POST['horasExtras'];

  $salarioBruto = $valorHora * $horasNormais + $valorHoraExtra * $horasExtras;
  $impostos = ($salarioBruto * 18) / 100;
  $salarioLiquido = $salarioBruto - $impostos;

  echo "Salário Bruto: $salarioBruto <br>";
  echo "Impostos: $impostos <br>";
  echo "Salario Líquido: $salarioLiquido";
  ?>




  
  <form action="" method="POST">
    <input type="number" name="valorHora"><br>
    <input type="number" name="valorHoraExtra"><br>
    <input type="number" name="horasNormais"><br>
    <input type="number" name="horasExtras"><br>
    <input type="reset" value="Limpar"> <input type="submit" value="Enviar">
  </form>
</body>
</html>
