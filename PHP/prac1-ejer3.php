/*ejemplo apra que funcione el programa http://localhost/web2/PHP/prac1-ejer3.php?peso=60&altura=1.67
ca como resultado 21,... peso NORMAL*/
<?php
define("CUADRADO",2);
$peso=$_GET['peso'];
$altura=$_GET['altura'];

echo "peso ".$peso." y altura ".$altura;

function IMC($p,$a){
    return ($p/($a**CUADRADO));
}
$indiceDMasa=IMC($peso,$altura);

echo "...Su IMC es : ".$indiceDMasa;

if ($indiceDMasa< 18.5){
echo "Usted esta BAJO DE PESO";
}elseif (($indiceDMasa>= 18.5)&&($indiceDMasa<= 24.99)){
    echo "Su peso es NORMAL";
}elseif($indiceDMasa>= 25){
    echo "Usted posee SOBREPESO";
}elseif ($indiceDMasa>= 30){
    echo "Usted posee OBESIDAD";
}
?>

