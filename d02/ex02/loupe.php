#!/usr/bin/env php
<?php
	if ($argc == 2)
	{
		if (!file_exists($argv[1]))
		{
			echo "ERROR: Specified file doesn't exist\n";
			exit;
		}
		if (!($fd = fopen($argv[1], 'r')))
			{
				echo "permission denied\n";
				exit;
			}
		while (!feof($fd))
		{
			$line = fgets($fd);
			$line = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches) 
			{
				return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
			}, $line);
			$line = preg_replace_callback('/<a.*?>(.*?)</', function ($matches) 
			{
				return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
			}, $line);
			echo $line;
		}
	}
	else
		echo "There is no argument \n";
?>