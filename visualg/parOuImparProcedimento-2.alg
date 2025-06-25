ALGORITMO "parOuImparProcedimento-2"
VAR
    N: Inteiro
Procedimento ParOuImpar(V: Inteiro)
Inicio
      Se (V % 2 = 0) entao
            Escreval("O número  ", V, "é par.")
      Senao
            Escreval("O número  ", V, "é impar.")
      FimSe
FimProcedimento
INICIO
      Escreva("Digite um número: ")
      Leia(N)
      ParOuImpar(N)
      Escreval("O valor de V e : ", V)
      Escreval("O valor de V e : ", N)
FIMALGORITMO
