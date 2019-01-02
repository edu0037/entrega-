<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
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
	for (var number = 1; number <= 100; number++) {
    if (number % 3 == 0 && number % 5 == 0) {
        console.log("FizzBuzz       continue; 
     }
    else if (number % 3 == 0) {
         console.log("Fizz        continue;
    }
    else if (number % 5 == 0) {
        console.log("Buzz       continue;
    }
     else {
         console.log(number) 
}}
 ?>