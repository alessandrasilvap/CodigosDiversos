<?php
/////////////////                   Tipos simples                   /////////////////
//String
$nome = "OLÁ MUNDO";
var_dump($nome);
if (is_string($nome)) {
  echo "É uma string.";
} else {
  echo "Não é uma string.";
}
echo "<hr>";

//Int
$idade = 10;
var_dump($idade);
if (is_int($idade)) {
  echo "É um inteiro.";
} else {
  echo "Não é um inteiro.";
}
echo "<hr>";

//Float
$altura = 1.77; //No float usamos ponto e não vírgula
var_dump($altura);
if (is_float($altura)) {
  echo "É um float.";
} else {
  echo "Não é um float.";
}
echo "<hr>";

//Boolean
$admin = true; //No boolean true e false não ficam entre aspas, se ficarem elas são lidas automaticamente como string
var_dump($admin);
if (is_bool($admin)) {
  echo "É um booleano.";
} else {
  echo "Não é um booleano.";
}
echo "<hr>";


/////////////////                   Tipos compostos                   /////////////////
//Array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true); //No array é permitido todos os tipos de dados dentro dele
var_dump($carros);
if (is_array($carros)) {
  echo "É um array.";
} else {
  echo "Não é um array.";
}
echo "<hr>";

//Object
class Cliente {
  public $nome;
  public function atribuirNome($nome) {
    $this->$nome = $nome;
  }
}
$cliente = new Cliente();
$cliente->atribuirNome("Rodrigo");
var_dump($cliente);
if (is_object($cliente)) {
  echo "É um objeto.";
} else {
  echo "Não é um objeto.";
}
echo "<hr>";


/////////////////                   Tipos especiais                   /////////////////
//Null
$cidade = NULL;
var_dump($cidade);
?>
