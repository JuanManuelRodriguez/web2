<?php

include_once "modelodb.php";
/**
 * La clase ....
 */
class Persona extends ModeloDB{
	
	/**
	 * E metodnndfsd
	 *
	 * param $q dfjfsdfj
	 */
	public function load(){
		return $this->query("Select * from persona where id < 10");
	}

	public function load_tipo(){
			// yuyuiyiu
		return $this->query("
			SELECT * 
			FROM persona 
    		JOIN tipo_persona 
    		on persona.tipo_persona_id = tipo_persona.id where persona.id < 10");
	}

	
}

?>