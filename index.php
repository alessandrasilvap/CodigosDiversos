<?php
//Tudo que será criado, será dentro disso
echo "Hello Word"; 


echo "<h1> Tipos de variáveis </h1>";

//Variável do php começa sempre com '$'
$esporte = 'boxe';
//Declarando variável String:
echo "Está variável é do tipo: ";
echo gettype($esporte);

//Variável do php começa sempre com '$'
$irmaos = 3;
//Declarando variável Number:
echo "<br> <br> Está variável é do tipo: ";
echo gettype($irmaos);

//Variável do php começa sempre com '$'
$aula = true;
//Declarando variável Boolean:
echo "<br> <br> Está variável é do tipo: ";
echo gettype($aula);

//Variável do php começa sempre com '$'
$nota = 8.5;
//Declarando variável Ponto flutuante:
echo "<br> <br> Está variável é do tipo: ";
echo gettype($nota);

//Constante do php começa sempre com 'define'
define("nome","Alessandra"); //Constante significa que o valor não vai mudar
//Declarando a constante:
echo "<br> <br> Constante nome: " . nome . "<b> <br>";


//Crindo um Array:
$coisas = array("trabalho","faculdade","autoescola","investimentos","cursos","boxe","academia","surf");
//Mostra a estrutura da lista Array
var_dump($coisas);
?>
