<?php

use LDAP\Result;

echo "hello, 
\nworld!";
$integer=18;
$double=0.234;
$string="hola";
$boolean=true;
echo "$integer, $double, $string, $boolean";
define("NOMBRE","Juan Hernandez");
?>
<html>
<head>
</head>
<body>
    <h1><?php echo NOMBRE;?></h1>
    <h2><?php $saludo="hello world!";
    $saludo=strtoupper($saludo);
    echo $saludo;
    $len=strlen($saludo);
    echo "---> esta palabra tiene: " . $len . " caracteres";
    ?></h2>
    <h3><?php 
      $len=strlen($saludo)-1;
      for($i=$len;$i>=0;$i--){
        $reves .=$saludo[$i];
      }
      echo $reves;
      $curso="***Aquest es el curs de php***  <br />";
      echo $curso . $saludo;

    ?></h3>
    <h4><?php 
    $intx = 3; 
    $inty = 4;
    $duN = 2.23;
    $duM = 1.3;
    echo "Integer X: " . $intx . "<br />" . "Integer Y: " . $inty . "<br />" . "Double N: " . $duN . "<br />" . "Double M: " . $duM;
    echo " <br />";
    echo " <br />";

    echo "Operaciones X y Y <br />";
    echo "$intx + $inty = " . $intx + $inty . "<br />";
    echo "$intx - $inty = " . $intx - $inty . "<br />";
    echo "$intx % $inty = " . $intx % $inty . " el modulo  <br />";
    echo "$intx * $inty = " . $intx * $inty . " la multiplicacion  <br />";
    echo " <br />";  

    echo "Operaciones N y M <br />";
    echo $duN + $duM . " la suma <br />";
    echo $duN - $duM . " la resta <br />";
    echo $duN * $duM . " el modulo <br />";
    echo $duN % $duM . " la multiplicacion <br />";
    echo " <br />"; 
    echo "El Doble de cada variable <br />";
    echo $intx + $intx . "<br />";
    echo $inty + $inty . " <br />";
    echo $duN + $duN . "  <br />";
    echo $duM + $duM . "  <br />";
    echo " <br />"; 
    echo "La suma de todas las variables <br />";
    echo "$intx + $inty + $duN + $duM = ". $intx + $inty + $duN + $duM;
    echo " <br />"; 
    echo "El producto de todas las variables <br />";
    echo "$intx * $inty * $duN * $duM = ". $intx * $inty * $duN * $duM;
    ?></h4>
</body>



