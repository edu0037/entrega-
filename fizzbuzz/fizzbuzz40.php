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
	for (int i = 1; i <= 100; i++)
        {
            if(  ((i % 3) != 0) && ((i % 5) != 0))
            {
                WriteLine($"{i}");
            }
                else if ((i % 3) == 0)
                {
                    WriteLine("Fizz");
                }
                else if ((i % 5) == 0)
                {
                    WriteLine("Buzz");
                }
            }                 
        }
 ?>