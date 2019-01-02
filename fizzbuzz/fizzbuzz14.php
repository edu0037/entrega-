<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>


			<form method="POST">
				<input type="POST" name="i 1">
				<input type="POST" name="i 2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
function fizzBuzz(){
	var output;
	for(var i=1;i<=100;i++){
		output = '';
		if(i%3 === 0){
			output+='Fizz';
		} 
		if(i%5 === 0){
			output+='Buzz';
		} 
		if(i%3 !== 0 && i%5 !== 0) {
			output+=i;
		}
		print(output);
	}
}
 ?>