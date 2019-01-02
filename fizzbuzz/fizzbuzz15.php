<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<label>Digite o 1 i</label>
	<input type="i" name="i=1"><br>
	<input type="submit" name="Enviar">
	</form>
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
		if(output === '') {
			output+=i;
		}
		print(output);
	}
}
 ?>
