<?php
/*A empresa XKW Ltda. Concedeu um bônus de 20 por cento do valor do salário a todos os funcionários com tempo de 
  trabalho na empresa igual ou superior a cinco anos e de dez por cento aos demais. Calcular e exibir o valor do bônus.*/
$funcionarios = [
    [
        'nome' => 'João Silva',
        'salario' => 3000.00,
        'tempo_de_trabalho_anos' => 7
    ],
    [
        'nome' => 'Maria Oliveira',
        'salario' => 2500.00,
        'tempo_de_trabalho_anos' => 3
    ],
    [
        'nome' => 'Pedro Souza',
        'salario' => 4500.00,
        'tempo_de_trabalho_anos' => 5
    ],
    [
        'nome' => 'Ana Costa',
        'salario' => 2800.00,
        'tempo_de_trabalho_anos' => 1
    ]
];

echo "<h2>Cálculo de Bônus da Empresa XKW Ltda.</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Salário</th>";
echo "<th>Tempo de Trabalho (Anos)</th>";
echo "<th>Porcentagem do Bônus</th>";
echo "<th>Valor do Bônus</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($funcionarios as $funcionario) {
    $nome = $funcionario['nome'];
    $salario = $funcionario['salario'];
    $tempoDeTrabalho = $funcionario['tempo_de_trabalho_anos'];
    $porcentagemBonus = 0;
    $valorBonus = 0;

    //Lógica para determinar a porcentagem do bônus
    if ($tempoDeTrabalho >= 5) {
        $porcentagemBonus = 0.20; //20%
    } else {
        $porcentagemBonus = 0.10; //10%
    }

    //Calcular o valor do bônus
    $valorBonus = $salario * $porcentagemBonus;

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nome) . "</td>";
    echo "<td>R$ " . number_format($salario, 2, ',', '.') . "</td>";
    echo "<td>" . $tempoDeTrabalho . "</td>";
    echo "<td>" . ($porcentagemBonus * 100) . "%</td>";
    echo "<td>R$ " . number_format($valorBonus, 2, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>
