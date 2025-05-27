<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Aumento Salarial</title>
</head>
<body>

<h2>Informe seu salário</h2>

<form method="post">
    <label for="salario">Salário atual: R$</label>
    <input type="number" name="salario" step="0.01" required>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $salario = floatval($_POST["salario"]);


    $novoSalario = $salario * 1.30;

   
    echo "<p>Salário com 30% de aumento: R$ " . number_format($novoSalario, 2,) . "</p>";
}
?>

</body>
</html>
