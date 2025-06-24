ALGORITMO "fatorial-2"
VAR
    N, C, F: Inteiro
    R: Caractere
INICIO
Repita
      Escreva("Digite um número: ")
      Leia(N)
      C <- N
      F <- 1
      Repita
            F <- F * C
            C <- C - 1
      Ate (C < 1)
      Escreval("O valor do fatorial de ", N, " e igual a ", F)
      Escreva("Quer continuar? [S/N]")
      Leia(R)
      LimpaTela
Ate (R = "N")
FIMALGORITMO
