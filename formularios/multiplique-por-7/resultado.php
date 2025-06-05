<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Multiplicação</title>
 
</head>
<body>
    
    <div class="container">
        <h1>Resultado</h1>

        <?php
     
        if (isset($_POST['numero'])) {
  
            $numero_usuario = floatval($_POST['numero']);
            
         
            $multiplicador = 7;
            
        
            $resultado = $numero_usuario * $multiplicador;
            
          
            echo "$numero_usuario x $multiplicador = $resultado";
            
        } else {
       
            echo "Nenhum número foi enviado. Por favor, volte e preencha o formulário.";
        }
        ?>
        
        <a href="index.html">Voltar</a>
    </div>

</body>
</html>