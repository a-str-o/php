#!/usr/bin/php
<?php
    if ($argc == 4)
    {
        function ft_is_operat($str)
        {
            $str = trim($str);
            if ($str[0] == '*' || $str[0] == '+' || $str[0] == '-' || $str[0] == '%' || $str[0] == '/')
                return 1;
            else
                return 0;
        }
        if (is_numeric(trim($argv[1])) && ft_is_operat($argv[2]) && is_numeric(trim($argv[3])))
            {
                $s = trim($argv[2]);
                if (strlen($s) != 1)
                {
                    echo "error in oprrator\n";
                    exit;
                }
                if ($s == '*')
                    $result = (int)trim($argv[1]) * (int)trim($argv[3]);
                if ($s == '+')
                    $result = (int)trim($argv[1]) + (int)trim($argv[3]);
                if ($s == '-')
                    $result = (int)trim($argv[1]) - (int)trim($argv[3]);
                if ($s == '/')
                    $result = (int)trim($argv[1]) / (int)trim($argv[3]);
                if ($s == '%')
                    $result = (int)trim($argv[1]) % (int)trim($argv[3]);
                echo $result . "\n";
            }
        else
        echo "Parameters are not numbers\n";
    }
    else
        echo "Incorrect Paramaters";
?>