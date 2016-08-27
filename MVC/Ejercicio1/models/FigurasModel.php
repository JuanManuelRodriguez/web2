<?php
require ('CuadradoModel.php');
require ('TrianguloModel.php');
require ('CirculoModel.php');

class FigurasModel
{
    private $figuras;//arreglo de figuras
    function __construct()
    {
        $this->figuras[]= new CuadradoModel(2,3);
        $this->figuras[]= new CuadradoModel(3,3);
        $this->figuras[]= new TrianguloModel(4,4);
        $this->figuras[]= new TrianguloModel(3,4);
        $this->figuras[]= new CirculoModel(4);
        $this->figuras[]= new CirculoModel(3);
    }
    function getFiguras(){
        return $this->figuras;
    }
}
?>