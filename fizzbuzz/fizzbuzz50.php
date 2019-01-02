<!DOCTYPE html>
<html>
	<head>
		<title>Fizzbuzz</title>
	</head>
	<body>
			<form method="POST">
				<input type="POST" name="number1">
				<input type="POST" name="number2">
				<input type="submit" name="Enviar" value="Enviar">
			</form>
		<br>
	</body>
</html>
<?php
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	defmodule FizzBuzz do
  def count_to(number) when is_integer(number) do
    Enum.each(1..number, & fizz_buzz/1)
  end
  
  defp fizz_buzz(number) when rem(number, 5)  == 0, do: IO.puts("Buzz")
  defp fizz_buzz(number) when rem(number, 3)  == 0, do: IO.puts("Fizz")
  defp fizz_buzz(number), do: IO.puts(Integer.to_string(number))
end
 ?>