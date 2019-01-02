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
	defmodule FizzBuzz do  
  def start(n), do: compute(n, 1)

  defp compute(n, count) do
    fizzbuzz(rem(count, 3), rem(count, 5), count)
    compute(n, count + 1)
  end

  defp fizzbuzz(0, 0, _), do: IO.puts "FizzBuzz"
  defp fizzbuzz(0, _, _), do: IO.puts "Fizz"
  defp fizzbuzz(_, 0, _), do: IO.puts "Buzz"
  defp fizzbuzz(_, _, n), do: IO.puts n
end
 ?>