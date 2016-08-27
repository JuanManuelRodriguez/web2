<?php
require('libs/Smarty.class.php');
class FigurasView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function mostrar($figuras){
        $this->smarty->assign('figuras',$figuras);
        $this->smarty->display('figuras.tpl');
    }
}
?>