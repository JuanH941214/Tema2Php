<?php
$num1=$_POST['n1'];
$num2=$_POST['n2'];
$operacion=$_POST['operacion'];
//$resultado=$_POST['resultado'];

function MyCalculadora($num1,$num2,$operacion){
    switch ($operacion) {
        case "+":
          $resultado="suma: " . $num1+$num2;
          break;
        case "-":
            $resultado= "resta" . $num1-$num2;
          break;
        case "/":
            if($num1>=$num2)
            {
                $resultado="division" . $num1/$num2;
            }
            else{
                $resultado="division 2: " . $num2/$num1;
            }
            
          break;
      }
      return $resultado;

}

$resultado=MyCalculadora($num1,$num2,$operacion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="calculadora.php" method="post">
Valor uno: <input type= "number" name="n1" id="n1" value= "<?php echo $num1; ?>" ><br>
Valor dos: <input type="number" name="n2" value="<?php echo $num2; ?>"><br>
<br>
<input type="submit" name= "operacion" value= "+">
<input type="submit" name= "operacion" value= "-">
<input type="submit" name= "operacion" value= "/">
</form>
<br>Resultado: <input readonly="readonly" name="resultado" value="<?php echo $resultado; ?>" ><br>

</body>
</html>