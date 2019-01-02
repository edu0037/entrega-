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
var x = 0;

while (x < 100) {
  
  x = x + 1;
  
  if ( x % 3 === 0 && x % 5 === 0 ){
    console.log(x + ' Fizbuzz');
    continue;
  }
  
  if( x % 3 === 0 ){
    console.log(x + ' Fizz');
    continue;
  }
  
  if( x % 5 === 0 ) {
    console.log(x + ' Buzz');
    continue;
  }
  
  console.log(x.toString());
  
}
 ?>
