<?php
$tiempo=$_POST['n1'];
//$recargo;
$tarifa=10;
function Precio($tiempo,$tarifa){
    if($tiempo<=3){
        $precio="$" . $tarifa; 
    }
    elseif($tiempo>3){
        $precio= " $" . $tarifa +(5*($tiempo- 3)) . "  tarifa adicional"  ;
    }
    return $precio;
}
$calcular = Precio($tiempo,$tarifa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>CALCULAR PRECIO LLAMADAS</h1>
<form action="nivel2ejercicio1.php" method="post">
<input type="submit" name= "operacion" value= "SUERTE">
Tiempo llamada <input type= "number" name="n1" id="n1" value= "<?php echo $tiempo; ?>" ><br>
</form>
<br>Precio: <input readonly="text" name="juego" value="<?php echo $calcular; ?>" ><br>  
</body>
</html>