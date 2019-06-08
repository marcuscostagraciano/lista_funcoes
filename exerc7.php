<?php

function meses ($numeromes)
    {
        if ($numeromes==1)
            {print "O mês de número $numeromes é: Janeiro";}

        if ($numeromes==2)
            {print "O mês de número $numeromes é: Fevereiro";}

        if ($numeromes==3)
            {print "O mês de número $numeromes é: Março";}

        if ($numeromes==4)
            {print "O mês de número $numeromes é: Abril";}

        if ($numeromes==5)
            {print "O mês de número $numeromes é: Maio";}

        if ($numeromes==6)
            {print "O mês de número $numeromes é: Junho";}

        if ($numeromes==7)
            {print "O mês de número $numeromes é: Julho";}

        if ($numeromes==8)
            {print "O mês de número $numeromes é: Agosto";}

        if ($numeromes==9)
            {print "O mês de número $numeromes é: Setembro";}

        if ($numeromes==10)
            {print "O mês de número $numeromes é: Outubro";}

        if ($numeromes==11)  
            {print "O mês de número $numeromes é: Novembro";}

        if ($numeromes==12)
            {print "O mês de número $numeromes é: Dezembro";}

        if ($numeromes<1 or $numeromes>12)
            {print "Então,\nsinto em lhe informar mas, um ano tem só 12(doze) meses, e não $numeromes meses";}
}

print "Digite o número do mês: ";
$numeromes= (int) fgets(STDIN);

meses ($numeromes);