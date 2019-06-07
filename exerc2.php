<?php

function hipotenusa ($catetoa,$catetob)
    {$hip = sqrt(($catetoa**2)+($catetob**2));
     return $hip;}

print "Digite o cateto a: ";
$catetoa = (float) fgets(STDIN);

print "Digite o cateto b: ";
$catetob = (float) fgets(STDIN);

$hipotenusa= hipotenusa($catetoa,$catetob);
$hipotenusa= round($hipotenusa, 3);

print "A hipotenusa é: $hipotenusa ";
