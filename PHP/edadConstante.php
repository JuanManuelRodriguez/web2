<?php
define("NOMBRE","Nacho");

function promedio($arreglo){
  return array_sum($arreglo)/count($arreglo);
}

$edades["Nico"] = 20;
$edades["Lucas"] =21;
$edades["Nelson"] = 22;
$edades["Gaspar"] = 23;
$edades["Euge"] = 24;
$edades["Nacho"] = 25;

echo "<ul>";
foreach ($edades as $persona) {
  echo "<li>$persona</li>";
}
echo "</ul>";

$nombre =$_GET["nombre"];
echo "La edad de ".$nombre." es: ".$edades[$nombre]."...";//para que se muestre esto hay que agregar a la URL ?nombre=<nombre del array>
echo "La edad de ".NOMBRE." es: ".$edades[NOMBRE]."...";
echo "El promedio de edad es: ".promedio($edades);

?>
