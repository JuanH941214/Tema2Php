<?php
//$resultado = true;

use LDAP\Result;

$numero = rand(0, 1);
//$res=true;
echo $numero;
function isbitten($numero){   
    if($numero == 1) {
        $resultado = true . "PERDISTE! te han mordido";
    }elseif($numero == 0){
        $resultado = false . "GANASTE! no te han mordido";
    }    
    return $resultado; 
}
$juego=isbitten($numero);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Juego: presiona el boton</h1>
<form action="ejercicio6.php" method="post">
<input type="submit" name= "operacion" value= "SUERTE">
</form>
<br>Resultado: <input readonly="text" name="juego" value="<?php echo $juego; ?>" ><br>  
</body>

</html>