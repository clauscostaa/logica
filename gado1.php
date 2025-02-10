<?php
$peso_a = 80;
$peso_b = 90;
$valor_arroba = 234.67;
$arroba = 15;
$produtor = "Claus";
$arroba_animal = ($peso_a + $peso_b) / $arroba;
$valor_arroba_animal = $arroba_animal + $valor_arroba;

echo "o valor a pagar ao produtor " . $produtor . " é de R$ " . number_format($valor_arroba_animal, 2, ',', '.');