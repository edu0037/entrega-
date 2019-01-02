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
function fizzBuzz(){
	for(var number=1;number<=100;number++){
		if(number%3 === 0){
			print('Fizz');
		} 
		if(number%5 === 0){
			print('Buzz');
		} 
		if(number%3 !== 0 && number%5 !== 0) {
			print(number);
		}
	}
}
 ?>
