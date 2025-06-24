ALGORITMO "calcularNota"
VAR
    n1, n2, media: Inteiro
INICIO
      Escreval("--------------------------------")
      Escreval("      Escola Javali Cansado     ")
      Escreval("--------------------------------")
      Escreva("Primeira nota: ")
      Leia(n1)
      Escreva("Segunda nota: ")
      Leia(n2)
      media <- (n1 + n2) / 2
      Escreval("--------------------------------")
      Escreval("Méda: ", media)
      Se (media <= 6) entao
          Escreva("Aluno reprovado.")
      Senao
          Escreva("Aluno aprovado.")
      FimSe
      Escreval("--------------------------------")
FIMALGORITMO
