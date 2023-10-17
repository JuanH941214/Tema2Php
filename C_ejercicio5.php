<?php 
$int_nota=$_POST['n1'];
function grado($int_nota){
    if ($int_nota>60 && $int_nota<=100){
    $resultado="primera divisio";
    } elseif ($int_nota>45 && $int_nota<=59){
    $resultado= "segona divisio";
    } elseif ($int_nota>33 && $int_nota<=44){
    $resultado= "tercera divisio";
    } elseif ($int_nota<=33){
    $resultado= "reprobaste";
    } 
 return $resultado;   
}

$estudiante=grado($int_nota);
echo "hola";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio5.php" method="post">
nota en %: <input type= "number" name="n1" id="n1" value= "<?php echo $int_nota; ?>" ><br>
<input type="submit" name= "operacion" value= ":(">
</form>
<br>Resultado: <input readonly="text" name="resultado" value="<?php echo $estudiante; ?>" ><br>  
</body>
</html>