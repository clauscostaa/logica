<?php

$aluno ="aluno1";
$nota1 = 7;
$nota2 = 8;
$nota3 = 9;
$nota4 = 10;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media >= 7) {
  echo $aluno . ", você foi aprovado com média " . $media;
} else if  ($media < 7 && $media >= 5) {
 echo $aluno . ", você está em recuperação com média " . $media;
} else {
    echo $aluno . ", você foi reprovado com média " . $media;
}