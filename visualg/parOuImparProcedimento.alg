ALGORITMO "parOuImparProcedimento"
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
      Escreval("Digite um número: ")
      Leia(N)
      ParOuImpar(N)
FIMALGORITMO
