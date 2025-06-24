ALGORITMO "conta1a10-3"
VAR
    cont, N, R: Inteiro
INICIO
      cont <- 1
      Escreval("Quer ver a tabuada de qual número? ")
      Leia(N)
      Repita
          R <- N * cont
          Escreva(N, " x ", cont, " = ", R)
          cont <- cont + 1
      Ate (cont > 10)
FIMALGORITMO
