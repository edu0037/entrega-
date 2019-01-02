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
	var combinations = new List<Tuple<int, string>>
    { 
        new Tuple<int, string> (3, "Fizz"), 
        new Tuple<int, string> (5, "Buzz"), 
    };

    Func<int, int, bool> isMatch = (i, comb) => i % comb == 0;
    for (int i = 1; i <= 100; i++)
    {
        Console.Write(i);

        var matchingCombs = combinations.Where(c => isMatch(i, c.Item1)).ToList();
        if (matchingCombs.Any())
        {
            Console.Write(string.Join("", matchingCombs.Select(c => c.Item2)));
        }
        else
        {
            Console.Write(i);
        }
        Console.Write(Environment.NewLine);
    }
}
 ?>