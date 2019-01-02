<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
		<h1>
			Digite os numeros 
		</h1>
		<script>
var counter = 1

while (counter < 300) {
    if (counter % 3 == 0 && counter % 5 == 0){
        console.log("fizzbuzz");
    }
    else if (counter % 3 == 0) {
        console.log("fizz");
    }
    else if (counter % 5 == 0){
        console.log("buzz");
    }
    else {
        console.log(counter);
    }
    counter = counter + 1;
}
</script>
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
	for ($numero1; $numero1 <= $numero2; $numero1++) { 
 		if (($numero1 % 3) == 0) {
 			echo "Fizz";
 		}		
 		if (($numero1 % 5) == 0) {
 			echo "Buzz";
 		}
 		if (($numero1 % 3 && $numero1 % 5) != 0) {
 			echo "$numero1";
 		}
 		echo "<br>";
 	}
 ?>