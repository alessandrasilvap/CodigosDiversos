ALGORITMO "calcularIdade"
VAR
    ano, nasc, idade: Real
INICIO
      Escreva("Ano atual (yyyy): ")
      Leia(ano)
      Escreva("Ano de nascimento (yyyy): ")
      Leia(nasc)
      idade <- ano - nasc
      Escreval("-------------STATUS-------------")
      Escreval("Idade: ", idade)
      Se (idade <= 17) entao
          Escreva("Inapto a tirar carteira.")
      Senao
          Escreva("Apto a tirar carteira.")
      FimSe
      Escreval("--------------------------------")
FIMALGORITMO
