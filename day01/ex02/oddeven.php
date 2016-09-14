#!/usr/bin/php
<?PHP
	
	$handle = fopen("php://stdin","r");
	$line = "heh";
	$e = "E";
	$t = "T";
	$i = 0;
	$enter = "nter a number: ";
	while ($line != NULL)
	{
		$even = "odd";
		echo $e . $enter;
		$line = fgets($handle);
		$line = trim($line);
		if ($line != NULL && is_numeric($line))
		{
			if (($line % 2) == 0)
				$even = "even";
			echo $t . "he number " . $line . " is " . $even . "\n";
		}else if ($line != NULL)
		{
			$e = "e";
			$t = "t";
			$i++;
			if ($i >= 3)
			{
				$e = "E";
				$enter = "ntrez un numbre: ";
			}
			echo "'" . $line . "' is not a number\n";
		}
	}
?>