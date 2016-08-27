<?php
/* Metodo = GET...Escribir un programa que pida el ingreso de dos strings y luego los concatene,
 poniendo un espacio entre  ambas cadenas de texto. Imprimir el texto concatenado por pantalla*/
//ejemplo de como hacer para que funcione el programa: http://localhost/web2/PHP/prac1-ejer2.php?texto=Juan&texto2=Manuel
$texto1=$_GET['texto'];
$texto2=$_GET['texto2'];
echo "<h1>".$texto1." ".$texto2."</h1>"
?>