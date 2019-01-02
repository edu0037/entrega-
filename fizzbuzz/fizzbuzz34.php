<!DOCTYPE html>
<html>
  <head>
    <title>Fizzbuzz</title>
  </head>
  <body>
      <form method="POST">
        <input type="POST" name="n1">
        <input type="POST" name="n2">
        <input type="submit" name="Enviar" value="Enviar">
      </form>
    <br>
  </body>
</html>
<?php
  //here is our main function
func main() {
  var fizz string
  var buzz string

  for n := 0; n <= 100; n++ {
    str := "%d %s%s"
    if n%3 == 0 {
      fizz = "fizz"
    } else {
      fizz = ""
    }
    if n%5 == 0 {
      buzz = "buzz"
    } else {
      buzz = ""
    }
    res := fmt.Sprintf(str, n, fizz, buzz)
    fmt.Println(res)
  }
}
 ?>