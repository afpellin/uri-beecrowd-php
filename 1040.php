<?php

(float)$numeros = explode(" ", readline());

$a = $numeros[0];
$b = $numeros[1];
$c = $numeros[2];
$d = $numeros[3];

$media = ($b + $c + $d + $a) / 4;

echo "Media: ".number_format($media, 1, ".", "")."\n";

if($media >= 7.0)
{
    echo "Aluno aprovado.\n";
}
elseif($media >= 5.0 && $media <= 6.9)
{
    echo "Aluno em exame.\n";

    $notaExame = readline();
    echo "Nota do exame: ".number_format($notaExame, 1, ".", "")."\n";

    $mediaFinal = ($media + $notaExame) / 2;

    if($mediaFinal >= 5.0)
    {
        echo "Aluno aprovado.\n";
        echo "Media final: ".number_format($mediaFinal, 1, ".", "")."\n";
    }
    else
    {
        echo "Aluno reprovado.\n";
        echo "Media final: ".number_format($mediaFinal, 1, ".", "")."\n";
    }

}
elseif($media < 5.0)
{
    echo "Aluno reprovado.\n";
}

?>