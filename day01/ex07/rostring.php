#!/usr/bin/php
<?php
if ($argc > 2)
{
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
$s = ft_split($argv[1]);
for ($i = 1; $i < count($s);$i++)
        echo $s[$i] . " ";
echo $s[0] . "\n";
}
?>