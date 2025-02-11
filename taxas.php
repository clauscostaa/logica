<?php

$taxas = [
    "USD" => 6.00,
    "EUR" => 5.50,
"GBP" => 6.30,
"ARS" => 0.05
];

$valor_real = 100;
echo "<strong>valor em reais: R$ $valor_real <br></strong>";
echo "valor em dolar : US$ ". number_format($valor_real / $taxas['USD'], 2, ',', '.') . "<br>";
echo "valor em dolar : EUR$ ". number_format($valor_real / $taxas['EUR'], 2, ',', '.') . "<br>";
echo "valor em dolar : GB$ ". number_format($valor_real / $taxas['GBP'], 2, ',', '.') . "<br>";
echo "valor em dolar : AR$ ". number_format($valor_real / $taxas['ARS'], 2, ',', '.') . "<br>";