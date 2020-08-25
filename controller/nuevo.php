<?php

class Nuevo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
        
    }

    function registrarAlumno(){
        echo "Alumno registrado";
        $this->model->insert();
    }
}
?>