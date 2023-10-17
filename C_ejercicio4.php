<?php
    $numInicio=0;
    $numProgresion=$_POST['n1'];
    $numLimite=$_POST['n2'];
   // $lista=array();
    $total;
    function Contar($numInicio, $numProgresion, $numLimite){
        $lista = array();
        for($i=$numInicio;$i<=$numLimite;$i +=$numProgresion){ 
        $lista[] = $i;
        }
    return $lista;
    }
    //$resultado= Contar($numInicio, $numProgresion, $numLimite);
    $resultado= Contar($numInicio, $numProgresion, $numLimite);
    echo "De " . $numProgresion . " en " . $numProgresion ; 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio4.php" method="post">
Progresion: <input type= "number" name="n1" id="n1" value= "<?php echo $numProgresion; ?>" ><br>
Valor limite: <input type="number" name="n2" value="<?php echo $numLimite; ?>"><br>
<input type="submit" name= "operacion" value= ":(">
</form>
<br>Resultado: <?php foreach ($resultado as $valor) {echo $valor . ", ";} ?><br>
</body>
</html>