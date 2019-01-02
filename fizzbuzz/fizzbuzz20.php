<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="operator">
				<input type="operator" name="numero1">
				<input type="operator" name="numero2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	function fizzBuzz(operator){
	var output;
	for(var numero=1;numero<=100;numero++){
		output = '';
		if(eval(numero+operator+3) === 0){
			output+='Fizz';
		} 
		if(eval(numero+operator+5) === 0){
			output+='Buzz';
		} 
		if(output === '') {
			output+=numero;
		}
		print(output);
	}
}
 ?>