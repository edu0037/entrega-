<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
		<h1>
			Digite Dois numeros sendo o 1° maior que o 2° 
		</h1>
			<form method="POST">
				<input type="POST" name="numero1">
				<input type="POST" name="numero2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	for ($numero1; $numero1 <= $numero2; $numero1++) { 
 		if (($numero1 % 3) == 0) {
 			echo "Fizz";
 		}		
 		if (($numero1 % 5) == 0) {
 			echo "Buzz";
 		}
 		if (($numero1 % 3 && $numero1 % 5) != 0) {
 			echo "$numero1";
 		}
 		echo "<br>";
 	}
 ?>