ALGORITMO "quantosEntre0e10"
VAR
    C, V, Tot010: Inteiro
INICIO
      Tot010 <- 0
      Para C <- 1 ate 6 faca
          Leia(V)
          Se (V >= 0) e (V <= 10) faca
              Tot010 <- Tot010 + 1
          FimSe
      FimPara
      Escreva("Ao todo foram ", Tot010, " valores entre 0 e 10")
FIMALGORITMO
