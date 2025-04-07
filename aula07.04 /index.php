<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php if(isset($_GET["total"])) {
            echo "Resultado: " . $_GET ("total") . "<br><br>";
        }
        ?>
        <form action="calcular.php" method="post">
            <label for="n1">
                Número 1:
                <input type="text" name="n1">
            </label>
            <label for="n2">
                Número 2:
                <input type="text" name="n2">
            </label>
            <br> <br>
            Operações <br>
            <label>
                <input type="radio" name="operacao" value="somar">
                Somar:
            </label>
            <label>
                <input type="radio" name="operacao" value="subtrair">
                Subtrair:
            </label>
            <label>
                <input type="radio" name="operacao" value="dividir">
                Dividir:
            </label>
            <label>
                <input type="radio" name="operacao" value="multiplicar">
                Multiplicar:
            </label>
            <br> <br>
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">            
        </form>
    </body>
</html>
