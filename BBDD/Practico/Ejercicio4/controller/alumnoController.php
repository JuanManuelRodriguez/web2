<?php

require_once("model/alumnoModel.php");
require_once("view/alumnoView.php");

class AlumnoController {

    private $model;
    private $view;

    function __construct(){
      $this->model = new AlumnoModel();
      $this->view = new AlumnoView();
    }

    public function showAlumnos(){
      $alumnos = $this->model->getAlumnos();
      $this->view->mostrar($alumnos);
    }

}

 ?>
