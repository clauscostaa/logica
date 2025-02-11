<?php

$frutas = ["Maçã", "banana" , "laranja" , "abacaxi" , "uva"];

foreach ($frutas as $fruta) {
 echo $fruta . "<br>";
}

echo "-----------------------------------<br>";
$frutas[] = "morango";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

echo "------------------------------------------------<br>";
array_shift($frutas);//remove o primeiro elemento do array
unset($frutas[1]);//remove o elemento através do indice

foreach ($frutas as $fruta) {
echo $fruta . "<br>";
}
