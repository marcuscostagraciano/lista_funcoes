<?php

function aprovadooureprovado ($nota1, $nota2)
    {$media= ($nota1+$nota2)/2;
    
        if ($media<6)
            {print "Vocé foi reprovado, com $media de média";}

        else {print "PARABÉNS! Você foi aprovado! Com $media de média";}}

print "Digite a nota 1: ";
$nota1= (float) fgets(STDIN);

print "Digite a nota 2: ";
$nota2= (float) fgets(STDIN);

print aprovadooureprovado($nota1,$nota2);
