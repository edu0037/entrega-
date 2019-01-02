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
 for (var number = 1; number <=100; number++) {
// Print numbers not divisible by 3 and 5, or 3, or 5
 if (!((number % 5 == 0 && number % 3 == 0) || (number % 5 == 0) || (number % 3 == 0))) {
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
