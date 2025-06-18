<?php
//STRTOUPPER
$nome = "alessandra pereira";

$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

//STRTOLOWER
$nome = "ALESSANDRA PEREIRA";

$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

//SUBSTR
$mensagem = "Olá mundo";

echo substr($mensagem, 4, 6);
echo "<hr>";

//STR_PAD
$objeto = "mouse";

$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);
/*
STR_PAD_RIGHT: Preenche à direita (padrão).
STR_PAD_LEFT: Preenche à esquerda.
STR_PAD_BOTH: Preenche em ambos os lados.
*/
echo $novoObjeto
echo "<hr>";

//STR_REPEAT
$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

//STRLEN
$mensagem = "Olá mundo";
echo strlen($mensagem);
echo "<hr>";

//STR_REPLACE
$texto = "O código está indo muito ruim.";
echo $texto;
$novoTexto = str_replace("ruim", "bem", $texto);
echo $novoTexto;
echo "<hr>";

//STRPOS
$texto = "O código está indo muito ruim.";
echo $texto;
echo strpos($texto, "código");
?>
