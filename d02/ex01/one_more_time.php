#!/usr/bin/php
<?php
    if ($argc == 2)
    {  
        if (preg_match_all("/ /i", $argv[1]) != 4)
            echo "Wrong Format\n";
        else
        {
            $word = explode(" ", $argv[1]);
            $days ="lundimardimercredijeudivendredisamedidimanche";
            $mois ="janvierFévrierMarsAvrilMaiJuinJuilletAoutSeptembreOctobreNovembreDecembre";
            $d = "/" . $word[0]. "/i";
            $m = "/" . $word[2] . "/i";
            $time = explode(":" , $word[4]);
            $t = "/:/i";
            if (preg_match($d,$days) != 1)
            {
                echo $word[0] . " incorrecte\n";
                exit;
            }
            if (!(is_numeric($word[1])))
            {
                echo $word[1] . " incorrecte\n";
                exit;
            }
            if ((int)$word[1] > 31 || (int)$word[3] < 0)
            {
                echo $word[1] . " incorrecte\n";
                exit;
            }
            if (preg_match($m,$mois) != 1)
            {
                echo $word[2] . " incorrecte\n";
                exit;
            }
            if (!(is_numeric($word[3])))
            {
                echo $word[3] . " incorrecte\n";
                exit;
            }
           
            if (strlen($word[4]) == 8)
            {
                if (preg_match_all($t,$word[4]) != 2 || $word[4][2] != ':' || $word[4][5] != ':')
                {
                    echo $word[4] . " incorrecte\n";
                    exit;
                }
            }
            else
                {
                echo $word[4] . " incorrecte\n";
                exit;
                }
                
            if ((int)$time[0] > 24 || (int)$time[0] < 0)
            {
                echo $time[0] . " incorrecte\n";
                exit;
            }
            if ((int)$time[1] > 60 || (int)$time[0] < 0)
            {
                echo $time[1] . " incorrecte\n";
                exit;
            }
            if ((int)$time[2] > 60 || (int)$time[0] < 0)
            {
                echo $time[2] . " incorrecte\n";
                exit;
            }
                if($word[2] == "janvier" || $word[2] == "Janvier")
                $word[2] = 1;
                if($word[2] == "Février" || $word[2] == "février")
                $word[2] = 2;
                if($word[2] == "Mars" || $word[2] == "mars")
                $word[2] = 3;
                if($word[2] == "Avril" || $word[2] == "avril")
                $word[2] = 4;
                if($word[2] == "Mai" || $word[2] == "mai")
                $word[2] = 5;
                if($word[2] == "Juin" || $word[2] == "juin")
                $word[2] = 6;
                if($word[2] == "Juillet" || $word[2] == "Juillet")
                $word[2] = 7;
                if($word[2] == "Aout" || $word[2] == "aout")
                $word[2] = 8;
                if($word[2] == "Septembre" || $word[2] == "septembre")
                $word[2] = 9;
                if($word[2] == "Octobre" || $word[2] == "octobre")
                $word[2] = 10;
                if($word[2] == "Novembre" || $word[2] == "novembre")
                $word[2] = 11;
                if($word[2] == "Decembre" || $word[2] == "decembre")
                $word[2] = 12;
        
            $resul = mktime((int)$time[0],(int)$time[1],(int)$time[2],$word[2],(int)$word[1],(int)$word[3] );
            echo $resul ."\n";
        }
    }
?>