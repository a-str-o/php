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
    $i = 1;
    $tab = array();
    while ($i < $argc)
    {
        $s = ft_split($argv[$i]);
        for ($l = 0 ; $l < count($s); $l++)
            array_push($tab, $s[$l]);
        $i++;
    }
    sort($tab);
    for ($i = 1;$i < count($tab);$i++)
        echo $tab[$i] ."\n";
?>