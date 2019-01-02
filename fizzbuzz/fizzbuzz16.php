<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="POST">
				<input type="POST" name="Number1">
				<input type="POST" name="Number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$numero1 = $_POST["Number1"];
	$numero2 = $_POST["Number2"];
function fizzBuzz(){
	var output, currentNumberDivisibleBy3, currentNumberDivisibleBy5;
	for(var i=1;i<=100;i++){
		output = '';
		currentNumberDivisibleBy3 = (i%3 === 0);
		currentNumberDivisibleBy5 = (i%5 === 0);
		if(currentNumberDivisibleBy3){
			output+='Fizz';
		} 
		if(currentNumberDivisibleBy5){
			output+='Buzz';
		} 
		if(!currentNumberDivisibleBy3 && !currentNumberDivisibleBy5) {
			output+=i;
		}
		print(output);
	}
}
 ?>