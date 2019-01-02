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
for (var numero = 1; numero <= 100; numero ++) {
  var output = ""

  if (numero % 3 === 0) output += "Fizz"
  if (numero % 5 === 0) output += "Buzz"
  if (output === "") output = numero

  console.log(output)
}
 ?>