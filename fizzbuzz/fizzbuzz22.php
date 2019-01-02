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
	$Number1 = $_POST["Number1"];
	$Number2 = $_POST["Number2"];
	function fizzBuzz(length, fizzNumber, buzzNumber){
	var range = [];
	for(var i=1;i<=length;i++){ range.push(i); }
	var output;
	range.forEach(function(i){
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
	});
}
 ?>