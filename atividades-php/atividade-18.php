
<?php

$pressaoSistolica = 145;

echo "Pressão: " . $pressaoSistolica . " mmHg - ";

if (!is_numeric($pressaoSistolica) || $pressaoSistolica < 0) {
    echo "Valor inválido para pressão.";
} elseif ($pressaoSistolica < 90) {
    echo "Risco: Hipotensão (pressão baixa)";
} elseif ($pressaoSistolica >= 90 && $pressaoSistolica <= 119) {
    echo "Situação: Pressão ideal";
} elseif ($pressaoSistolica >= 120 && $pressaoSistolica <= 129) {
    echo "Situação: Pressão normal alta";
} elseif ($pressaoSistolica >= 130 && $pressaoSistolica <= 139) {
    echo "Situação: Pré-hipertensão (atenção necessária)";
} elseif ($pressaoSistolica >= 140 && $pressaoSistolica <= 159) {
    echo "Situação: Hipertensão Estágio 1";
} elseif ($pressaoSistolica >= 160 && $pressaoSistolica <= 179) {
    echo "Situação: Hipertensão Estágio 2";
} else {
    echo "Situação: Crise hipertensiva – risco de vida!";
}

?>