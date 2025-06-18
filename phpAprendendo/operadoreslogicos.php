<?php
$idade = 25;
$nome = "Alessandra";

//e (&& - and)
if (($idade == 25) && ($nome == "Rodrigo")) {
  echo "É verdadeiro";
} else {
  echo "É falso";
}

//ou (|| - or)
if (($idade == 27) or ($nome == "Alessandra")) {
  echo "É verdadeiro";
} else {
  echo "É falso";
}

//ou exclusivo (xor)
if (($idade == 23) xor ($nome == "Alessandra")) {
  echo "É verdadeiro";
} else {
  echo "É falso";
}

//negacao (!)
if ((!$idade == 25) (!$nome == "Alessandra")) {
  echo "É verdadeiro";
} else {
  echo "É falso";
}
?>
