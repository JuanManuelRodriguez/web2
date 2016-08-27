<?php
/*Metodo: POST  Escribir una página web que mediante javascript genere tantos inputs como se le indique.
 Luego escriba  un script que sume todos los valores contenidos en esos inputs y los muestre.  */
$inputs= array_keys($_POST['inputN']);
$contadorInputs=count($inputs);
$suma=0;
for($indice=0;$indice<$contadorInputs;$indice++){
    if (isset($_POST['inputN'][$inputs[$indice]])&& ($_POST['inputN'][$inputs[$indice]] != "")) {
        $suma = $suma + $_POST['inputN'][$inputs[$indice]];
    }
}
echo "La suma de todos los inputs es: ".$suma;
/*$submitted_array = array_keys($_POST['action_button']);
echo ($_POST['action_button'][$submitted_array[0]] . " " . $submitted_array[0]); */
?>