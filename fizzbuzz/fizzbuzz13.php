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
	function fizzBuzz(){
	for(var numero=1;numero<=100;numero++){
		if(numero%5 === 0 && numero%3 === 0){
			print('FizzBuzz');
		} else if(numero%3 === 0){
			print('Fizz');
		} else if(numero%5 === 0){
			print('Buzz');
		} else {
			print(numero);
		}
	}
}
 ?>