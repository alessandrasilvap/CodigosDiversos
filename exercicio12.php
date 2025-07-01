<?php
//Exercícios de estrutura condicional
/*Leia  dois números, calcule a soma deles e se o resultado da soma for maior que 10, então imprima o resultado.*/
$n1 = 47;
$n2 = 42:

$soma = $n1 + $n2;

if ($soma > 10) {
  echo "O resultado é $soma";
} else {
  exit();
}





/*Faça um programa que receba duas notas de um aluno, calcule e mostre a média aritmética. Se a media for maior que 7,
então deverá imprimir aluno aprovado.*/
$aluno = "Camila";
$nota1 = 3;
$nota2 = 7;

$media = ($nota1 + $nota2) / 2;

if ($media > 7) {
  echo "A média do(a) aluno(a): $aluno foi de $media, portanto ele está aprovado!";
} else {
  echo "A média do(a) aluno(a): $aluno foi de $media, portanto ele está reprovado!";
}





/*Faça um programa que receba dois números e mostre o maior.*/
$num1 = 342;
$num2 = 2333;

if ($num1 > $num2) {
  echo $num1;
} elseif ($num2 > $num1) {
  echo $num2;
} else {
  echo "Números iguais.";
}





/*A empresa XKW Ltda. Concedeu um bônus de 20 por cento do valor do salário a todos os funcionários com tempo de 
trabalho na empresa igual ou superior a cinco anos e de dez por cento aos demais. Calcular e exibir o valor do bônus.*/
$tempoDeEmpresa = 2;
$salario = 1500.50;

if ($tempoDeEmpresa > 5) {
  echo "O funcionário está a mais de 5 anos na empresa. <br>";
  $bonus = (20 / 100);
  $total = $bonus + $salario;
  echo "Portanto, ganhará $bonus de bônus, no total será R$ $total";
}  else {
  echo "O funcionário está a menos de 5 anos na empresa, está há exatamente $tempoDeEmpresa anos na empresa. <br>";
  $bonus = (20 / 100);
  $total = $bonus + $salario;
  echo "Portanto, ganhará $bonus de bônus, no total será R$ $total";
}
?>
