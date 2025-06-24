ALGORITMO "valoresPares-2"
VAR
    cont, V: Inteiro
INICIO
      Escreva("Digite um valor: ")
      Leia(V)
      Se (V % 2 = 1) entao
          V <- V - 1
      FimSe
      Para cont <- V ate 0 passo -2 faca
          Escreva(cont)
      FimPara
FIMALGORITMO
