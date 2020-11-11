#!/usr/bin/php
<?php

    function ft_split($str)
    {
        $tab = array();
        $i = 0;
        $k = 0;
        $j = 0;
        while ($i < strlen($str))
        {
            while (($i < strlen($str)) &&  ($str[$i] == ' ' || $str[$i] == '\t'))
                $i++;
            $j = $i;
            while (($j < strlen($str)) && ($str[$j] != ' ' && $str[$j] != '\t'))
                $j++;
            if ($i != $j)
                $tab[$k] = substr($str, $i, $j-$i);
            $i = $j;
            $k++;
        }
        return $tab;
    }
    $i = 0;
    $tab = ft_split("  kdmls   kljds     jsd          younes");
    print_r($tab);
?>