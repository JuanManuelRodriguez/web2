<?php
require_once ('FiguraModel.php');

class CirculoModel extends FiguraModel
{
    private $radio;
    function __construct($radio)
    {
        $this->radio=$radio;
    }
    function getArea()
    {
        return (($this->radio*$this->radio)*M_PI);
    }
}
?>