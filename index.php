<?php
include "kalkulator/kalkulator.php";
include "kalkulator/kalkulator-dodatkowy.php";
include "BMI/BMI.php";
include "kostka/kostka.php";
?>
<!DOCTYPE html>
<html>

<head>
	
	<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
	<h2>Coś co liczy ciekawe reczy</h2>
	

	<?php 
		if(isset($_POST['submit']))
		{
			$x  = $_POST['x'];
			$y = $_POST['y'];
			$operators = $_POST['operators'];
    		$objCal = new calculatorplus();
			


			if($x == "")
			{
				echo "<center><b>Pole x nie może być puste</center></b>";
			}
			elseif($operators == "dodawanie")
			{
				$objCal->dodawanie($x, $y);
			}
			elseif($operators == "odejmowanie")
			{
				$objCal->odejmowanie($x, $y);
			}
			elseif($operators == "mnozenie")
			{
				$objCal->mnozenie($x, $y);
			}
			elseif($operators == "dzielenie")
			{
				$objCal->dzielenie($x, $y);
			}
			elseif($operators == "pierwiastek")
			{
				$objCal->pierwiastek($x);
			}
			elseif($operators == "logarytm")
			{
				$objCal->logarytm($x);
			}
			elseif($operators == "podzielna")
			{
				$objCal->podzielna($x, $y);
			}

		}



				


	 ?>
	<form action="" method="post">
		<table class="tabela">
			<tr>
				<td>X:</td>
				<td><input type="float" name="x"></td>
			</tr>

			<tr>
				<td>wybor</td>
				<td>
					<select name="operators">
						<option>dodawanie</option>
						<option>odejmowanie</option>
						<option>mnozenie</option>
						<option>dzielenie</option>
						<option>pierwiastek</option>
						<option>logarytm</option>
						<option>podzielna</option>
					</select>
			</td>
			<td>
				<input class="submit" type="submit" name="submit" value="Licz">
			</td>
			</tr>

			<tr>
				<td>Y:</td>
				<td><input type="float" name="y"></td>
				
			</tr>

			
		</table>
	</form>

		<br><br>
		<h2>Oblicz swoje BMI</h2>
		<?php

			if(isset($_POST['submitBMI']))
		{
			$wzrost  = $_POST['wzrost'];
			$waga = $_POST['waga'];
			$BMI= new BMI();
			$BMI->liczbmi($wzrost, $waga);
		}	



		?>

	<form action="" method="post">
		<table class="tabela">
			<tr>
				<td>wzrost(cm):</td>
				<td><input type="number" name="wzrost"></td>
			</tr>

			<tr>
				
			
			</tr>

			<tr>
				<td>waga(kg):</td>
				<td>
					<input type="number" name="waga">
				</td>
				
				<td>
					<input class="submit" type="submit" name="submitBMI" value="Licz">
				</td>
			
			</tr>
			
				

			
		</table>
	</form>

	<br><br>
	<h2>Losowanie liczby</h2>
	<?php

			if(isset($_POST['submitlosowanie']))
		{
			$liczbaod  = $_POST['liczbaod'];
			$liczbado = $_POST['liczbado'];
			$losowanie= new losowanie();
			$losowanie->losuj($liczbaod, $liczbado);
		}	



		?>

	<form action="" method="post">
		<table class="tabela">
			<tr>
				<td>do jakiej liczby:</td>
				<td><input type="number" name="liczbaod" value="1"></td>
			</tr>

			<tr>
				
			
			</tr>

			<tr>
				<td>od jakiej liczby:</td>
				<td>
					<input type="number" name="liczbado" value="6">
				</td>
				
				<td>
					<input class="submit" type="submit" name="submitlosowanie" value="Losuj">
				</td>
			
			</tr>
			
				

			
		</table>
	</form>



</body>
</html>