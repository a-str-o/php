#!/usr/bin/php
<?php
     if ($argc == 2) 
     {
         $array = preg_split('/(\+|\-|\*|\/|\%)/', $argv[1]);
        if (count($array) == 2 && is_numeric(trim($array[0])) && is_numeric(trim($array[1]))) 
        {
            $first_op = trim($array[0]);
            $secod_op = trim($array[1]);
            if (strpos( $argv[1],"/"))
                $result = $first_op / $secod_op;
            elseif (strpos( $argv[1],"*")) {
                $result = $first_op * $secod_op;
            } elseif (strpos( $argv[1],"-")) {
                $result = $first_op - $secod_op;
            } elseif (strpos( $argv[1],"%")) {
                $result = $first_op % $secod_op;
            } elseif (strpos( $argv[1],"+")) {
                $result = $first_op + $secod_op;
            }
            echo $result;
            echo "\n";
        } 
        else {
            echo "Syntax Error\n";
       }
    } 
    else
        echo "Incorrect Parameters\n";
?>