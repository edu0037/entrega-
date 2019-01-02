<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="POST">
				<input type="POST" name="Num1">
				<input type="POST" name="Num2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$Num1 = $_POST["numero1"];
	$Num2 = $_POST["numero2"];
function createFizzBuzz(){
  var fizzNum = 3;
  var buzzNum = 5;
  var length = 30;
  
  var fizzBuzz = function(){
    //... any of our solutions from above
  }
  
  fizzBuzz.setFizzNum = function(newVal){
	fizzNum = newVal; 
  }
  fizzBuzz.setBuzzNum = function(newVal){
	buzzNum = newVal; 
  }
  
  return fizzBuzz;
}
 ?>