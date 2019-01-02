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
for numero in range(1,21):
    string = ""
    if numero % 3 == 0:
        string = string + "Fizz"
    if numero % 5 == 0:
        string = string + "Buzz"
    if numero % 5 != 0 and numero % 3 != 0:
        string = string + str(numero)
    print(string)
 ?>