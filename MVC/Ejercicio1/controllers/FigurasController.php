<?php
require('views/FigurasView.php');
require_once('models/FigurasModel.php');


class FigurasController
{   private $vista;
    private $modelo;
    function __construct()
    {
        $this->modelo = new FigurasModel();
        $this->vista = new FigurasView();
    }

    function iniciar(){
        $figuras =$this->modelo->getFiguras();
        $cantidad = count($figuras);
        usort($figuras,array("FiguraModel","comparator"));
        /*for($i=0;$i< $cantidad;$i++){
            for($j=0;$j< $cantidad;$j++){
                if($figuras[$i]->getArea()>$figuras[$j]->getArea()){
                    $menor=$figuras[$i];
                    $figuras[$i]=$figuras[$j];
                    $figuras[$j]=$menor;
                }
            };
        };*/
        $this->vista->mostrar($figuras);
    }
}
?>