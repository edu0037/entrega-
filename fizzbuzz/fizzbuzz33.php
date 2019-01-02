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
   var list = Enumerable.Range(1,100)
                Select(n => {
                      if (n % 3 == 0) {
                        return "Fizz";
                      }
                      if (n % 5 == 0) {
                        return "Buzz";
                      }
                      return n.ToString();
                    });

    foreach(string item in list)
      Console.WriteLine(item);
  }
}
 ?>