<?php
for ($contador  = 0; $contador <= 10; $contador++) {
  echo "5 x $contador = " . ($contador * 5) . "<br>";
}

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indices => $valor) {
  echo $indices . "-" . $valor . "<br>";
}
?>
