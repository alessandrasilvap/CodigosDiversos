ALGORITMO "fatorial"
VAR
    N, C, F: Inteiro
INICIO
      Escreva("Digite um número: ")
      Leia(N)
      C <- N
      F <- 1
      Repita
            Escreva(C, " x ")
            F <- F * C
            C <- C - 1
      Ate (C < 1)
      Escreval("O valor do fatorial de ", N, " e igual a ", F)
FIMALGORITMO
