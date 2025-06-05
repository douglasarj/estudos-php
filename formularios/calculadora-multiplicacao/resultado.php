<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <h2>Resultado da Multiplicação</h2>

    <?php
    
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
           
            $numero1 = floatval($_GET['num1']);
            $numero2 = floatval($_GET['num2']);

            $resultado = $numero1 * $numero2;

   
            echo "O resultado de $numero1 × $numero2 é: $resultado";
        } else {
            echo "Por favor, forneça dois números para multiplicar.";
        }
    ?>

    <br>
    <a href="index.html">Calcular novamente</a>

</body>
</html>