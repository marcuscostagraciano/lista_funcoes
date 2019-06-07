<?php

function Celsius ($fahrenheit)
    {$celsius = ($fahrenheit-32)*(5/9);
     return $celsius;}

print "Digite a temperatura em Fahrenheit para a conversão: ";
$fahrenheit = (float) fgets(STDIN);

$celsius= Celsius ($fahrenheit);
$celsius= round ($celsius, 3);

print "Temperatura em Celsiu é: $celsius"."°C ";
