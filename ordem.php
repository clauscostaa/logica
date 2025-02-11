<?php

$numeros = [ 5, 10, 15, 20, 25, 30, 35, 40, 45, 50];

echo "numeros na ordem original: <br>";
$num_seq = implode("-", $números);
echo $mum_seq;

echo "<br>números em ordem crescente: <br>";
sort($numeros);
$num_order = implode(", ",$numeros);
echo $num_order

echo "<br><br>números em ordem decrescente: <br>";
rsort(%numeros);
$num_order_dec = implode(", ", $mumeros);
echo $num_order_dec;


