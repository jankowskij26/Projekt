<?php

class calculatorplus extends calculator 
	{
    function pierwiastek($x)
    {
		echo "<center><b>pierwiastek z $x wynosi:</b>  ".(sqrt($x))."<br/></center>";
	}
	function logarytm($x)
	{
		echo "<center><b>logarytm naturalny z $x  wynosi:</b>  ".(log($x))."<br/></center>";
	}
	function podzielna($x, $y){
		$podzielna=$x%$y;
		if($podzielna==0)
		{
			echo "<center><b>Liczba $x jest podzielna przez $y</b> <br/></center>";
		}
		else 
		{
			echo "<center><b>Liczba $x nie jest podzielna przez $y</b>  <br/></center>";
		}
	}
}

?>