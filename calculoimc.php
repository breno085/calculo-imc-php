<?php

echo "Digite o valor do IMC para obter a sua classificação: ";
$imcUsuario = fgets(STDIN);

echo calculatarIMC($imcUsuario);

function calculatarIMC($imcValor) {
    $faixaClassificacao = [
        "magreza" => [0, 18.5],
        "saudável" => [18.51, 24.9],
        "sobrepeso" => [25.0, 29.9],
        "obesidade grau I" => [30.0, 34.9],
        "obesidade grau II" => [35.0, 39.9],
        "obesidade grau III" => [40, PHP_INT_MAX]
    ];

    foreach ($faixaClassificacao as $classificacao => $faixa) {
        if ($imcValor >= $faixa[0] && $imcValor <= $faixa[1]) {
            return "Atenção, seu IMC é $imcValor, e você está classificado como $classificacao\n";
        }
    }

    return "Valor de IMC inválido.";
}
?>
