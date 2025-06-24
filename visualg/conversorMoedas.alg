ALGORITMO "conversorMoedas"
VAR
    R, D, C: Real
INICIO
      C <- 1
      Enquanto (C <= 4) faca
          Escreval("Qual o valor em R$? ")
          Leia(R)
          D <- R / 2.20
          Escreval("O valor convertido é US$", D:5:2)
          C <- C + 1
      FimEnquanto
FIMALGORITMO
