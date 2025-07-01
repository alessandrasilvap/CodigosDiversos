<?php
$nomes = array("alessandra", "larissa", "gabriel", "camilly", "carla", "izabelly", "giovanni", "bernardo", "laika");

var_dump($nomes);
$i = 0;
for ($i = 0; $i < 10; $i++) {
  echo $nomes;
}

$nomes[7];
$nomes[9];
$nomes[1];

//FOREACH REQUER DOIS PARÂMETROS: O NOME DO ARRAY A SER MANIPULADO E A VARIÁVEL QUE REPRESENTARÁ O VALOR DO ELEMENTO SENDO MANIPULADO.
foreach ($nomes as $valor) {
  echo "<br> $valor, <br>";
}
echo "<br>";
echo "<hr>";





$faculdades = array("análise e desenvolvimento de sistemas", "ciências da computação", "gestão de sitema");

foreach ($faculdades as $key => $valor) {
  echo $key . " = " . $valor . "<br>";
}





$vendedor[1] = "Paulo";
$vendedor[2] = "Carlos";
$vendedor[3] = "Vviane";
$vendedor[4] = "Mariana";

$valor[1] = 2454.50;
$valor[2] = 2587.00;
$valor[3] = 2648.85;
$valor[4] = 2314.46;

$valorTotal = 0;
for ($x = 1, $x <= 4; $x++) {
     $valorTotal = $valorTotal + $valor[$x];
}

echo "Total vendas $valorTotal.";

for ($x = 1; $x <= 4; $x++) {
 echo $vendedor [$x] . " - R$ " . $valor[$x] . " - (" . ($valor[$x] / $valorTotal * 100) . "%)";
}
?>
