ALGORITMO "contaNegativa"
VAR
    N, C, ToTN: Inteiro
INICIO
      C <- 1
      ToTN <- 0
      Repita
            Escreval("Digite um número: ")
            Leia(N)
            Se (N < 0) entao
                ToTN <- ToTN + 1
            FimSe
            C <- C + 1
      Ate (C > 5)
      Escreval("Foram digitados ", ToTN, " valores negativos")
FIMALGORITMO
