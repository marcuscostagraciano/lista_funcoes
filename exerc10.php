<?php

function maior ($numero1, $numero2)
    {
        if ($numero1>$numero2)
            {print "O primeiro número($numero1) é maior que o segundo número($numero2)";}

        elseif ($numero1==$numero2)
            {print "Os dois números tem o mesmo valor(são iguais)";}

        else {print "O segundo número($numero2) é maior que o primeiro número($numero1)";}
    }

print "Digite o número 1: ";
$numero1= (float) fgets(STDIN);

print "Digite o número 2: ";
$numero2= (float) fgets(STDIN);

maior ($numero1, $numero2);