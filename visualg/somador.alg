ALGORITMO "somador"
VAR
    N, S: Inteiro
    resp: Caractere
INICIO
      S <- 0
      resp <- "S"
      Enquanto (resp = "S") faca
          Escreva("Digite o valor ==> ")
          Leia(N)
          S <- S + N
          Escreva("Você quer continuar? [S/N] ")
          Leia(resp)
      FimEnquanto
      Escreval("A soma de todos os valores digitados é ", S)
FIMALGORITMO
