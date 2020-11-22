#!/usr/bin/php
<?php
	if ($argc >= 2)
	{
	    $str_word = preg_replace("/\s+/", " ", $argv[1]);
	    $str = trim($str_word);
        echo ("$str\n");
    }
?>