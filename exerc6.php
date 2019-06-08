<?php

function intervalo ($numeroinicial, $numerofinal)
    {   if ($numeroinicial>$numerofinal)
            {
                for ($i=$numeroinicial; $i>=$numerofinal; $i--)
                    {$intervalo+= $i;}
                     print "A soma dos números no intervalo de $numeroinicial, até o $numerofinal, foi de: $intervalo";
            }

        elseif  ($numeroinicial<$numerofinal)
            {
                for ($i=$numeroinicial; $i<=$numerofinal; $i++)
                    {$intervalo+= $i;}
                     print "A soma dos números no intervalo de $numeroinicial, até o $numerofinal, foi de: $intervalo";
            }
                
        elseif ($numeroinicial==$numerofinal)
            {print "Os números são iguais";}    
    }

print "Digite o número inicial: ";
$numeroinicial= (int) fgets(STDIN);

print "Digite o número final: ";
$numerofinal= (int) fgets(STDIN);

intervalo ($numeroinicial, $numerofinal);