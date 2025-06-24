ALGORITMO "calcularSalario"
VAR
    Nome: Caractere
    Sal, NSal: Real
    Dep: Inteiro
INICIO
      Escreva("Qual o nome do funcionario? ")
      Leia(Nome)
      Escreva("Qual o salário do funcionario? ")
      Leia(Sal)
      Escreva("Qual é a quantidade de dependentes? ")
      Leia(Dep)
      Escolha Dep
          Caso 0
                NSal <- Sal + (Sal * 5 / 100)
          Caso 1, 2, 3
                NSal <- Sal + (Sal * 10 / 100)
          Caso 4, 5, 6
                NSal <- Sal + (Sal * 15 / 100)
          OutroCaso
                NSal <- Sal + (Sal * 18 / 100)
      FimEscolha
      Escreval("O novo salário do ", Nome, " será de R$", Sal:5:2)
FIMALGORITMO
