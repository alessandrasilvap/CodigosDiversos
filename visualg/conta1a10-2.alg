ALGORITMO "conta1a10-2"
VAR
    cont, N, R: Inteiro
INICIO
      cont <- 1
      N <- 7
      Repita
          R <- N * cont
          Escreva(N, " x ", cont, " = ", R)
          cont <- cont + 1
      Ate (cont > 10)
FIMALGORITMO
