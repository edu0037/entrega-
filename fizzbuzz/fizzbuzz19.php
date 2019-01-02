<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<label>Digite o 1 numero</label>
	<input type="number" name="num1"><br>
	<input type="submit" name="Enviar">
	</form>
</body>
</html>
<?php 
$num1=$_POST['num1'];
function fizzBuzzBang(length, fizzNumber, buzzNumber, bangNumber){
	var output;
	for(var i=1;i<=length;i++){
		output = '';
		if(i%fizzNumber === 0){
			output+='Fizz';
		} 
		if(i%buzzNumber === 0){
			output+='Buzz';
		}
		if(i%bangNumber === 0){
			output+='Bang';
		} 
		if(i%fizzNumber !== 0 && i%buzzNumber !== 0 && i%bangNumber !== 0) {
			output+=i;
		}
		print(output);
	}
}
 ?>
