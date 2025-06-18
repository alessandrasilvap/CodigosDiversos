<?php
//IF e ELSE
$numero = 50;

if ($numero == 10) {
  echo "É iual a 10";
} elseif ($numero <= 9) {
  echo "É menor ou igual a 9";
} else {
  echo "É diferente de 10";
}
echo "<hr>";

//Condição ternária
$media = 7;

echo ($media >= 7) ? "Aprovado" : "Reprovado";

//SWITCH
$cor = "amarelo";

switch($cor) {
  case "Vermelho":
  echo "Sua cor preferida é o vermelho";
  break;
  case "Verde":
  echo "Sua cor preferida é o verde";
  break;
  case "Azul":
  echo "Sua cor preferida é o azul";
  break;
  default:
  echo "Sua cor prefeirda não é vermelho, verde ou azul";
}
?>
