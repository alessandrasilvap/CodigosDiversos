<?php
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);
define("TIMES", ['vasco', 'flamengo', 'fluminense']);

echo 'Meu nome é ' . NOME . ', minha idade é  ' . IDADE . ' e minha altura é ' . ALTURA . '.';
echo "<hr>";
echo var_dump(TIMES);

function exibeNome() {
  echo NOME;
}

exibeNome();
?>
