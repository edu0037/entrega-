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
  for (int i = 1; i <= 100; ++i)
    {
        bool isDivisibleByThree = i % 3 == 0;
        bool isDivisibleByFive = i % 5 == 0;

        if (isDivisibleByThree || isDivisibleByFive)
        {
            if (isDivisibleByThree)
                cout << "Fizz";

            if (isDivisibleByFive)
                cout << "Buzz";
        }
        else
        {
            cout << i;
        }
        cout << endl;
    }
 ?>
