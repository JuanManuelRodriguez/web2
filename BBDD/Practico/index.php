<?php
$path = "interesesDeudas.csv";
$fila = 1;

$host 	= "localhost";
$db	= "interesesdeuda";
$user	= "root";
$pass	= "";

$dbconn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user, $pass);
function formatoFecha($dato){   //cambio el formato de las fechas
    if($dato){
        $fecha=explode("/",$dato);
        //echo $fecha[2]."-".$fecha[1]."-".$fecha[0];
        return $fecha[2]."-".$fecha[1]."-".$fecha[0];
    }
    return "0000-00-00";
};
function formatoMonto($dato){  //cambia el formato de los monto, interes y pagado
    $monto=explode(",",$dato);
    //echo $monto[0].".".$monto[1];
    return $monto[0].".".$monto[1];
};
if (($gestor = fopen($path, "rb")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {//mientras el archivo csv tenga lineas que leer
        $numero = count($datos);

        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
        $fila++;
        for ($c = 0; $c < $numero; $c++) {
            echo $datos[$c]." - " ;

        }
        echo "<br />\n";
        if ($fila>2) {//para que no guarde la primera linea que son los encabezados de las columnas
            $nombreDeudor=$datos[$numero-1];            //siempre va a quedar el ultimo campo que es el nombre del deudor
            $id_deudor="";
            //primero consultar que el deudor no este en la tabla; si esta, pedir id del  deudor
            $deudores = $dbconn->prepare("select * from persona");
            $deudores->execute();
            while ($filaTabla = $deudores->fetch(PDO::FETCH_ASSOC)) {//imprime la tabla "persona"
                echo $filaTabla['id_persona'] . ': ' . $filaTabla['nombre'] . '<br/>';
                if ($filaTabla['nombre'] === $nombreDeudor) {
                    $id_deudor = $filaTabla['id_persona'];
                }
            }
            //por cada fila del archivo, guardar un registro en la tabla de la base de datos

            //Consulta - Parametros Posicionales
            if ($id_deudor != "") {
                $sql = "INSERT INTO cuota (numero_cuota,fecha_pago,fecha_vencimiento,cuota_capital,interes,pagado,fk_id_persona) VALUES (?,?,?,?,?,?,?)";
                $q = $dbconn->prepare($sql);
                $q->execute(array($datos[0], formatoFecha($datos[1]),formatoFecha( $datos[2]), formatoMonto($datos[3]),formatoMonto($datos[4]), formatoMonto($datos[5]), $id_deudor));
                echo "Se ejecuto: ";
            } else {
                $sentencia = $dbconn->prepare("INSERT INTO persona(nombre) VALUES(?)");
                $sentencia->execute(array($nombreDeudor));
                $id_deudor = $dbconn->lastInsertId();
                $sql = "INSERT INTO cuota (numero_cuota,cuota_capital,fecha_pago,fecha_vencimiento,interes,pagado,fk_id_persona) VALUES (?,?,?,?,?,?,?)";
                $q = $dbconn->prepare($sql);
                $q->execute(array($datos[0], formatoFecha($datos[1]),formatoFecha( $datos[2]), formatoMonto($datos[3]),formatoMonto($datos[4]), formatoMonto($datos[5]), $id_deudor));
                echo "Se ejecuto: ";


            }
        }
    }
}
fclose($gestor);
?>