<?php

require('./views/View.php');	

class VistaPersona extends View{

	function mostrar_personas($personas){
		$this->smarty->assign("personas", $personas);
		$this->smarty->display('personas.tpl');
	}
	
}


?>