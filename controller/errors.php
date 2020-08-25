<?php
class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error Generico";
        $this->view->render('error/index');
        //echo "<p>Error al cargar recurso</p>";
    }
}
?>