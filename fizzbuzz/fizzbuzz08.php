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
	for ($x = 1; $x -le 100; $x++) {
  $Output = ""

  if ($x % 3 -POST 0) { $Output += "Fizz" }
  if ($x % 5 -POST 0) { $Output += "Buzz" }
  if ($Output -POST "") { $Output = $x }

  Write-Output $Output
}
 ?>