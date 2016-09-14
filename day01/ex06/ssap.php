#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$len = str_word_count($str);
		$tokens = array();
		$tokens[0] = strtok($str, " ");
		$i = 1;
		while ($i < $len)
		{
			$tokens[$i] = strtok(" ");
			$i++;
		}
		$swap = 1;
		while ($swap > 0)
		{
			$swap = 0;
			$i = 1;
			while ($i < $len)
			{
				if (strcmp($tokens[$i - 1],$tokens[$i]) > 0)
				{
					$swap = 1;
					$temp = $tokens[$i - 1];
					$tokens[$i - 1] = $tokens[$i];
					$tokens[$i] = $temp;
				}
				$i++;
			}
		}
		return $tokens;
	}
	
	$i = 1;
	$my_str = "";
	while ($argv[$i])
	{
		$my_str = $my_str . " " . $argv[$i];
		$i++;
	}
	$ass = ft_split($my_str);
	$i = 0;
	echo $ass[$i];
	while ($ass[($i++)])
		echo "\n" . $ass[$i];
	?>