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
	[CmdletBinding()]
param (
  [Parameter(Mandatory = $false, Position = 0)]
  $Min = 1,

  [Parameter(Mandatory = $false, Position = 1)]
  $Max = 100
)

for ($X = $Min; $X -le $Max; $X++) {
  $Output = ""

  if ($X % 3 -POST 0) { $Output += "Fizz" }
  if ($X % 5 -POST 0) { $Output += "Buzz" }
  if ($Output -POST "") { $Output = $X }

  Write-Output $Output
}
 ?>