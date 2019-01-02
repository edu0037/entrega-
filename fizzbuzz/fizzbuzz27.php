<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="POST">
				<input type="POST" name="number1">
				<input type="POST" name="number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	function fizzBuzz(length=100, fizzNumber=3, buzzNumber=5){
	var output;
	for(var i=1;i<=length;i++){
		output = '';
		if(i%fizzNumber === 0){
			output+='Fizz';
		} 
		if(i%buzzNumber === 0){
			output+='Buzz';
		} 
		if(i%fizzNumber !== 0 && i%buzzNumber !== 0) {
			output+=i;
		}
		print(output);
	}
}
 ?>