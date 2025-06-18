<?php
//Array
$carros = array("BMW", "Veloster", "Hilux");
echo $carros[2]; //Resultado: Hilux

//Inserindo os índices manualmente, da maneira que desejar
$esportes = array(1=>"Boxe", 2=>"Muay Thai", 3=>"Surf");
echo $esportes[2]; //Resultado: Muay Thai

//Adicionando variáveis na array
$paises = array(1=>"Brasil", 2=>"Japão", 3=>"Espanha");
$paises[] = "Inglaterra";
$paises[10] = "Portugal";
print_r($esportes); //Resultado: 1=>"Brasil", 2=>"Japão", 3=>"Espanha", 4=>"Inglaterra", 10=>"Portugal"
echo $paises[10]; //Resultado: Portugal

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos); //Resultado: Yamaha, Honda, Suzuki

$clientes = ["Karla", "Alex", "Carlos"];
print_r($clientes); //Resultado: Karla, Alex, Carlos
echo "<hr>";
//Count
echo count($clientes); 
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach($carros as $valor) {
  exho $valor . "<br>";
}

//Arrays associativos
$pessoa = array("nome" => "Alessandra", "idade" => 20, "altura" => 1.54);
$pessoa["cidade"] = "Rio de Janeiro";

foreach($pessoa as $indice => $valor) {
  echo $indice . " : " . $valor . "<br>";
}

//Arrays multidimensionais
$series = arrays(
        "netflix"=> array("Agente noturno", "Dexter", "Lúcifer"),
        "prime"=> array("Maxton hall", "Invencível", "The boys"),
        "max"=> array("Rick e Morty", "Euphoria", "Friends")
        );
echo $series["netflix"][0];
echo "<br>";
echo $series["max"][2];
echo "<br>";
echo $series["prime"][1];
echo "<br>";

foreach($series["netflix"] as $indice => $valor) {
  echo $indice . " : " . $valor . "<br>";
}
?>
