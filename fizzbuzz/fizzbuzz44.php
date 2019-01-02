<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
		<h1>
			Digite Dois numeros 
		</h1>
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
for (var number = 1; number <=100; number++) {
// Print numbers not divisible by 3 and 5, or 3, or 5
  if (!((number % 5 == 0) || (number % 3 == 0))){
    console.log(number);
}
//Print "FizzBuzz" for numbers divisible by 3 and 5
  else if (number % 5 == 0 && number % 3 == 0){ 
    console.log("FizzBuzz
} 
//Print "Buzz" for numbers divisible by 5; replace the rest with "Fizz" 
  else if (number % 5 == 0 ? console.log("Buzzconsole.log("Fizz
 }}
 ?>