
<?php

$mediaFinal = 8.5;

if ($mediaFinal < 0 || $mediaFinal > 10) {
    echo "Nota inválida.";

    
} elseif ($mediaFinal < 4) {
    echo "Nota: $mediaFinal - Situação: Reprovado com desempenho insuficiente.";
} elseif ($mediaFinal <= 5.9) {
    echo "Nota: $mediaFinal - Situação: Recuperação - precisa melhorar.";
} elseif ($mediaFinal <= 7.9) {
    echo "Nota: $mediaFinal - Situação: Aprovado com desempenho regular.";
} elseif ($mediaFinal <= 9.4) {
    echo "Nota: $mediaFinal - Situação: Aprovado com bom desempenho.";
} else {
    echo "Nota: $mediaFinal - Situação: Aprovado com excelência!";
}

?>