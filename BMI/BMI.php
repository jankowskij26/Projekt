<?php


class BMI
{
	function liczbmi($x, $y)
	{
		if($x != "" && $y !="")
		{
		$bmi=($y / (($x/100)*($x/100)));
		echo "<center><b>Twoje BMI wynosi:</b> ".$bmi."<br/></center>";
		}
		
		
	}
	

}





?>