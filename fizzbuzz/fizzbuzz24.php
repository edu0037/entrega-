<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>

			<form method="POST">
				<input type="POST" name="number1">
				<input type="POST" name="number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$numero1 = $_POST["number1"];
	$numero2 = $_POST["number2"];
	function createFizzBuzz(){
  var markers = [{number: 3, term: 'Fizz'}, {number: 5, term: 'Buzz'}];
  var length = 100;
  
  var fizzBuzz = function(){
	var range = [];
	for(var i=1;i<=length;i++){ range.push(i); }
	range.map(function(i){
		return markers.reduce(function(output,marker){
			if(i%marker.number === 0){
				output+=marker.term;
			}
			return output;
		},'');
	})
	.map(function(output, index){
		return output == ''? (index+1) : output;
	})
	.forEach(function(output){
		print(output);
	});
  }
  
  fizzBuzz.getMarkers = function(){
	return markers;
  }
  
  fizzBuzz.addMarker = function(marker){
	markers.push(marker);
  }

  return fizzBuzz;
}
 ?>