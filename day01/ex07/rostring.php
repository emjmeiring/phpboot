#!/usr/bin/php
<?PHP
	$i = 1;
	$ass = trim($argv[1]);
	$len = str_word_count($ass);
	$tok[0] = strtok($ass, " ");
	while ($i < $len)
	{
		$tok[$i] = strtok(" ");
		echo $tok[$i] . " ";
		$i++;
	}
	echo $tok[0];
	echo "\n";
?>