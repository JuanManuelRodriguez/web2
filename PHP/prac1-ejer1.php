<?php
/* el ususrio debe ingresar 3 numeros mediante el metodo GET, multiplicar los 2 primeros y restarle el tercero */
// ejemplo e como debe ser la URL para que funcione el programa ...
//http://localhost/web2/PHP/prac1-ejer1.php?numeros[]=1&numeros[]=2&numeros[]=3
$numeros=$_GET['numeros'];
echo "Se multiplicaran los 2 primeros numeros y se restara el tercero </br>";
$cuenta=($numeros[0]*$numeros[1])-$numeros[2];
echo "El resultado es: ".$cuenta;
?>