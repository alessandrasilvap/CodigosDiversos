ALGORITMO "somador-2"
VAR
    N, S: Inteiro
    resp: Caractere
INICIO
      S <- 0
      Repita
          Escreva("Digite o valor ==> ")
          Leia(N)
          S <- S + N
          Escreva("Você quer continuar? [S/N] ")
          Leia(resp)
      Ate (resp = "N")
      Escreval("A soma de todos os valores digitados é ", S)
FIMALGORITMO
