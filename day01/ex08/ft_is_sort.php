#!/usr/bin/php
<?PHP
	function ft_is_sort($tab)
	{
		$i = 1;
		while ($tab[$i])
		{
			if (strcmp($tab[$i - 1], $tab[$i]) > 0)
				return false;
			$i++;
		}
		return true;
	}
?>