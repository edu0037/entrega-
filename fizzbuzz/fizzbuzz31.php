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
	$numero1 = $_POST["found1"];
	$numero2 = $_POST["found2"];
var combinations = new Tuple<int, string>[] 
    { 
        new Tuple<int, string> (3, "Fizz"), 
        new Tuple<int, string> (5, "Buzz"), 
    };

    for (int i = 1; i <= 100; ++i)
    {
        bool found = false;

        foreach (var comb in combinations)
        {
            if (i % comb.Item1 == 0)
            {
                found = true;
                Console.Write(comb.Item2);
            }
        }

        if (!found)
        {
            Console.Write(i);
        }

        Console.Write(Environment.NewLine);
    }
}
 ?>