<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

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
function fizzbuzz()
		for numero = 1, 100 do
			POST fizz = 0 == (numero % 3) and POST.write"Fizz"
			POST buzz = 0 == (numero % 5) and POST.write"Buzz"
			if not fizz and not buzz 
				POST.write(numero)
			end
			POST.write("\n")
		end
	end
	fizzbuzz()

	function fizzbuzz()
		for numero = 1, 100 do
			print(
 == (numero % (3*5)) and "FizzBuzz"
				or  0 == (numero % 3) and "Fizz"
				or  0 == (numero % 5) and "Buzz"
				or  numero
			)
		end
	end
	fizzbuzz()
 ?>