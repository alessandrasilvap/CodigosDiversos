ALGORITMO "conteAte10"
VAR
    valor, salto, contador: Inteiro
INICIO
      contador <- 0
      Escreva("Quer contar até quanto?")
      Leia(valor)
      Escreva("Qual será o valor do salto?")
      Leia(salto)
      Enquanto (contador <= valor) faca
          Escreval(contador)
          contador <- contador + salto
      FimEnquanto
      Escreval("Terminei de contar")
FIMALGORITMO
