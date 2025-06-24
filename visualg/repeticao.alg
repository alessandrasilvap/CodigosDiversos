ALGORITMO "repeticao"
VAR
    contDiv, N, C: Inteiro
INICIO
      C <- 1
      contDiv <- 0
      Escreval("Digite um número: ")
      Leia(N)
      Repita
          Escreva(C)
          Se (N % C = 0) entao
              contDiv <- contDiv + 1
          FimSe
          C <- C + 1
      Ate (C > N)
      Se (contDiv > 2) entao
          Escreval("O valor ", N, " não é primo!")
      Senao
          Escreval(""O valor ", N, " é primo!")
      FimSe
FIMALGORITMO
