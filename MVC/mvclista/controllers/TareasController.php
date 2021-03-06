<?php
require('views/TareasView.php');
require('models/TareasModel.php');

class TareasController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new TareasModel();
    $this->vista = new TareasView();
  }

  function iniciar(){
    $tareas = $this->modelo->getTareas();
    $this->vista->mostrar($tareas);
  }

  function guardar(){
    $tarea = $_POST['tarea'];
    if(!$this->filtro($tarea)){
      $this->modelo->crearTarea($tarea);
    }
    $this->iniciar();
  }

  function eliminar(){
    $key = $_GET['index_tarea'];
    $this->modelo->eliminarTarea($key);
    $this->iniciar();
  }

  function filtro($tarea){
    return preg_match('/podria/',$tarea);
  }


}

 ?>
