<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<label>Digite o 1 numero</label>
	<input type="i" name="num1"><br>
	<input type="submit" name="Enviar">
	</form>
</body>
</html>
<?php 
function fizzBuzz(){
	for(var i=1;i<=100;i++){
		if(i%3 === 0){
			print('Fizz');
		} 
		if(i%5 === 0){
			print('Buzz');
		} 
		if(i%3 !== 0 && i%5 !== 0) {
			print(i);
		}
	}
}
 ?>
