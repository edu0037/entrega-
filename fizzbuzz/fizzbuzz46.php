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
defmodule FizzBuzz do  
  def start(n), do: compute(n, 1)

  defp compute(n, count) when count <= n do
    fizzbuzz(rem(count, 3), rem(count, 5), count)
    compute(n, count + 1)
  end

  defp compute(_, _), do: IO.puts ""

  defp fizzbuzz(0, 0, _), do: IO.puts "FizzBuzz"
  defp fizzbuzz(0, _, _), do: IO.puts "Fizz"
  defp fizzbuzz(_, 0, _), do: IO.puts "Buzz"
  defp fizzbuzz(_, _, n), do: IO.puts n
 ?>