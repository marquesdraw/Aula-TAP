<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method ="get">
        Digite um número: <input type="number" name="number"><br>
        <input type="submit" name="submit" value="Enviar"><br>
    </form>
    <?php
    $num = $_GET ['number'];
    if($num % 2 == 0)
   echo "$num é par";
  else
   echo "$num é ímpar";
 ?>
</body>
</html>