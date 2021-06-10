<?php


class Errores extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Error a procesar la solicitud o dirección no existe!";
        $this->view->render('errores/index');
    }
}

?>
