<!DOCTYPE HTML>
<html>
<head>
   <?php require 'class/calculadora.php'; ?>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
      Primeiro Numero: <input name="num1" type="text"><br>
      Segundo numero: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/">     
   </form> 
     <?php  
         $resultado = new calculadora();
         echo $resultado->formular($_POST["num1"], $_POST["num2"], $_POST["operacao"]);
     ?> 
</body>
</html>