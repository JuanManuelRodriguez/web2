<?php
require_once ('FiguraModel.php');
class TrianguloModel extends FiguraModel
{
    private $base;
    private $altura;
    function __construct($base,$altura){
        $this->base=$base;
        $this->altura=$altura;
    }
    function getArea()
    {
        return (($this->base*$this->altura)/2);
    }
}
?>