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
	for (int i = 1; i <= num; i++)
        {
            if (((i % 5) == 0) && ((i % 7) == 0)) // Is it a multiple of 5 & 7?
                System.out.println("fizzbuzz");
            else if ((i % 5) == 0) // Is it a multiple of 5?
                System.out.println("fizz");
            else if ((i % 7) == 0) // Is it a multiple of 7?
                System.out.println("buzz");
            else
                System.out.println(i); // Not a multiple of 5 or 7
        }
    }
 
    private static void fizzBuzzInJava8(int num) {
        IntStream.rangeClosed(1, 100)
                .mapToObj(i -> i % 5 == 0 ? (i % 7 == 0 ? "FizzBuzz" : "Fizz") : (i % 7 == 0 ? "Buzz" : i))
                .forEach(System.out::println);
    }
 ?>