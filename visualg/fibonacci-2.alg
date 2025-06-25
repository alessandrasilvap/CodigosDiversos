ALGORITMO "fibonacci-2"
VAR
    C, T1, T2, T3: Inteiro
Procedimento proximoFibonacci(var A, B: Inteiro)
Inicio
            C := A + B
            Escreva(C)
            A := B
            B := C
FimProcedimento
INICIO
      T1 <= 0
      Escreva(T1)
      T2 <= 1
      Escreva(T2)
      Para C := 3 ate 10 faca
            proximoFibonacci(T1, T2)
      FimPara
FIMALGORITMO
