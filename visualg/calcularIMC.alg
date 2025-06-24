ALGORITMO "calcularIMC"
VAR
    M, A, IMC: Real
INICIO
      Escreva("Massa(Kg): ")
      Leia(M)
      Escreva("Altura(m): ")
      Leia(A)
      IMC <- M / (A ^ 2)
      Escreval("IMC: ", IMC:5:2)
      Se (IMC >= 18.5) e (IMC < 25) entao
          Escreva("Parabéns! Você está no seu peso ideal.")
      Senao
          Escreva("Você não está na faixa de peso ideal.")
      FimSe
FIMALGORITMO
