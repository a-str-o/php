#!/usr/bin/php
<?php
    $even = array(" est Pair", " est Even");
    if (!($variable =fopen('php://stdin' ,'r')))
        return;
    echo "Entrez un nombre: ";
    while ($str = fgets($variable))
    {
            $line = trim(substr($str,0,-1));
            $print = $line;
            if ($line)
            if ($line[0] == '-' || $line[0] == '+')
                $line = substr($line,1,strlen($line));
            if (ctype_digit($line))
                {
                    if ((int)$line % 2 == 0)
                        echo "Le chiffre: ". $print . $even[1]."\n";
                    else
                        echo "Le chiffre: ". $print . $even[0]."\n";
                }
            else
                echo "'" . $print ."' n'est pas un chiffre\n";
        echo "Entrez un nombre: ";
    }
    close($variable);
?>
