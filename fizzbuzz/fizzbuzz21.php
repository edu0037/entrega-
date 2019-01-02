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
	function fizzBuzz(predicate){
	var output;
	for(var numero =1;numero<=60;numero++){
		output = '';
		if( predicate(numero,3) ){
			output+='Fizz';
		} 
		if( predicate(numero,5) ){
			output+='Buzz';
		} 
		if(output === '') {
			output+=numero;
		}
		print(output);
	}
}
 ?>