<?php
$nomes = array("Rodrigo", "Felipe", "Maria", "José");

// IS_ARRAY($ARRAY) Verifica se uma determinada variável é um array
if (is_array($nomes)) {
  echo "É um array";
} else {
  echo "Não é um array";
}

//IN_ARRAY($VALOR, $ARRAY) Verifica se um determinado valor existe em alguma posição do array
echo in_array("Rodrigo", $nome);
if (in_array("Carlos", $nome)) {
  echo "Existe no array";
} else {
  echo "Não existe no array";
}

//ARRAY_KEYS($ARRAY) Retorna um novo array com as chaves do array passado como parâmetro
$nomes = array("Primo"=>"Rodrigo", "Vizinho"=>"Felipe", "Mãe"=>"Maria", "Pai"=>"José");

$keys = array_keys($nomes);
print_r($keys);

//ARRAY_VALUES($ARRAY) Retorna um novo array com as valores do array passado como parâmetro
$nomes = array("Primo"=>"Rodrigo", "Vizinho"=>"Felipe", "Mãe"=>"Maria", "Pai"=>"José");

$values = array_values($nomes);
print_r($values);

//ARRAY_MERGE($ARRAY1 , $ARRAY2) Agrega o conteúdo dos dois arrays
$comidas = array("Strogonoff", "Macarrão de panela de pressão", "Costela");
$bebidas = array("Coca cola", "Guaraná", "Fanta laranja");

$refeicao = array_merge($comidas, $bebidas);
print_r($refeicao);

//ARRAY_POP($ARRAY) Exclui a última posição do array
$comidas = array("Strogonoff", "Macarrão de panela de pressão", "Costela");

print_r($comidas);
array_pop($comidas);
print_r($comidas);

//ARRAY_SHIFT($ARRAY) Exclui a primeira posição do array
$bebidas = array("Coca cola", "Guaraná", "Fanta laranja");

print_r($bebidas);
array_shift($bebidas);
print_r($bebidas);

//ARRAY_UNSHIFT($ARRAY, "VALOR") Adiciona um ou mais elementos no início do array
$marcas = array("Nike", "Adidas", "Puma");

print_r($marcas);
array_unshift($marcas, "Vans", "Fila", "New balance");
print_r($marcas);

//ARRAY_PUSH($ARRAY, "VALOR", "VALOR") Adiciona um ou mais elementos no final do array
$marcas = array("Nike", "Adidas", "Puma");

print_r($marcas);
array_push($marcas, "Vans", "Fila", "New balance");
print_r($marcas);

//ARRAY_COMBINE($KEYS, $VALUES) Mescla os dois arrays passados
$keys = array("Primeira", "Segunda", "Terceira");
$values = array("Nike", "Adidas", "Puma");

$marcas = arrays_combine($keys, $values);
print_r($marcas);

//ARRAY_SUM() Calcula a soma dos elementos de um array
$soma = array(5, 6, 10, 8);
echo array_sum($soma);

//EXPLODE("/", "20/01/2001") Transforma string em array
$data = "07/07/2004";
$novaData = exlplode('/', $data);
print_r($novaData);

$frase = "Meu nome não é Letícia";
$array = explode(" ", $frase);
print_r($array);

//IMPLODE("-", $ARRAY) Transforma array em string
$frutas = array("Banana", "Morango", "Uva");
$string = implode(", ", $frutas);
echo $string;
?>
