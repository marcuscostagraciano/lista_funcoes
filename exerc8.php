<?php

function inciaisdias ($numero)
    {
            if ($numero==1 or $numero==8 or $numero==15 or $numero==22 or $numero==29)
                {print "DOM";}

            if ($numero==2 or $numero==9 or $numero==16 or $numero==23 or $numero==30)
                {print "SEG";}

            if ($numero==3 or $numero==10 or $numero==17 or $numero==24 or $numero==31)
                {print "TER";}

            if ($numero==4 or $numero==11 or $numero==18 or $numero==25)
                {print "QUA";}

            if ($numero==5 or $numero==12 or $numero==19 or $numero==26)
                {print "QUI";}

            if ($numero==6 or $numero==13 or $numero==20 or $numero==27)
                {
                    if ($numero==13)
                        {print "Sexta-feira e 13 mesmo, BIRL!\n";}                    
                        print "SEX";}

            if ($numero==7 or $numero==14 or $numero==21 or $numero==28)
                {print "SAB";}

            if ($numero<1 or $numero>31)
                {print "Esse não é um dia válido";}
    }

print "Digite o número do dia, considerando que o mês começa no domingo: ";
$numero= (int) fgets(STDIN);

inciaisdias ($numero);