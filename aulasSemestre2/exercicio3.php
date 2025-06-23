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
    <input type="number" name="valorHora">
    <input type="number" name="valorHoraExtra">
    <input type="number" name="horasNormais">
    <input type="number" name="horasExtras">
  </form>
</body>
</html>
