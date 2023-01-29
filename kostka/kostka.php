<?php


class losowanie
{
	function losuj($x, $y)
	{
		if($x != "" && $y !="")
		{
		$losowanie=rand($x, $y);
		echo "<center><b>Wylosowana liczba z przedzialu od $x do $y to:</b> ".$losowanie."<br/></center>";
		}
	}
	

}





?>