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
        $figuras = $this->modelo->getFiguras();
        $this->vista->mostrar($figuras);
    }
}
?>