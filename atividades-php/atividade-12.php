<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dobro e Triplo</title>
</head>
<body>
  <h2>Calcular Dobro e Triplo</h2>

  <form method="post">
    <label>Digite um número:
      <input type="number" name="numero" step="0.01" required>
    </label>
    <button type="submit">Calcular</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $numero = floatval($_POST["numero"]);

      $dobro = $numero * 2;
      $triplo = $numero * 3;

      echo "<p>O dobro de $numero é <strong>$dobro</strong>.</p>";
      echo "<p>O triplo de $numero é <strong>$triplo</strong>.</p>";
  }
  ?>
</body>
</html>
