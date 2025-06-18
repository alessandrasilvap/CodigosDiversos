<?php
//Variáveis
$nome = "Alessandra Pereira";
$a = 1;
$b = 3;
$c = 7;

//Escopo global
function exibeNome() {
  global $nome;
  echo $nome;
}

exibeNome();
echo $nome;
echo "<hr>";

//Escopo local
function exibeCidade() {
  global $cidade;
  $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

//Escopo global
function soma() {
  echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
