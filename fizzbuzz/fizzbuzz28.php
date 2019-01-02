<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="arguments">
				<input type="arguments" name="number1">
				<input type="arguments" name="number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$numero1 = $_POST["numero1"];
	$numero2 = $_POST["numero2"];
	function fizzBuzz() {
	var length = arguments.length <= 0 || arguments[0] === undefined ? 100 : arguments[0];
	var fizzNumber = arguments.length <= 1 || arguments[1] === undefined ? 3 : arguments[1];
	var buzzNumber = arguments.length <= 2 || arguments[2] === undefined ? 5 : arguments[2];

	var output;
	for (var i = 1; i <= length; i++) {
		output = '';
		if (i % fizzNumber === 0) {
			output += 'Fizz';
		}
		if (i % buzzNumber === 0) {
			output += 'Buzz';
		}
		if (i % fizzNumber !== 0 && i % buzzNumber !== 0) {
			output += i;
		}
		print(output);
	}
}
 ?>