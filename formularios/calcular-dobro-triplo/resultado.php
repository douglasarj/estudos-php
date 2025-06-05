<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>

</head>
<body>

    <h1>Resultado</h1>

    <div class="resultado">
        <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $numero = floatval($_POST['numero']);
            $operacao = $_POST['operacao'];

            $resultado = 0;
            
            if ($operacao == 'dobro') {
                $resultado = $numero * 2;
                echo "<p>O <strong>dobro</strong> de $numero é <strong>$resultado</strong>.</p>";
            } elseif ($operacao == 'triplo') {
                $resultado = $numero * 3;
                echo "O triplo de $numero é $resultado.";
            } else {
                echo "Erro: Operação inválida.";
            }

        } else {
        
            echo "Por favor, utilize o formulário para calcular um valor.";
        }
        ?>
    </div>

    <a href="index.html">Calcular Novamente</a>

</body>
</html>