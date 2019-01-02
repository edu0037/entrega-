<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
		<h1>
			Digite numeros 
		</h1>
			<form method="POST">
				<input type="POST" name="number1">
				<input type="POST" name="number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	var FizzBuzzBuilder = function() {
  var fizzNumber = 3;
  var buzzNumber = 5;
  var length = 100;
  
  var fizzBuzz = function(){
    //fizzBuzz logic capturing the private variables in a closure
  };
  
  this.setFizzNumber = function(number) {
      fizzNumber = number;
      return this;
  };
  this.setBuzzNumber = function(number) {
      buzzNumber = number; 
      return this;
  };
  this.finalize = function() {
    return fizzBuzz;
  };
};
 ?>