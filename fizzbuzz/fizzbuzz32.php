<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post">
	<label>Digite o 1 numero</label>
	<input type="string" name="string 1"><br>
	<input type="submit" name="Enviar">
	</form>
</body>
</html>
<?php 
$num1=$_POST['num1'];
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