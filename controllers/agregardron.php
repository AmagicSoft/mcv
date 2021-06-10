<?php
class Agregardron extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje="";
       // $this->view->render('agregardron/index');
    }

    function render(){
        $this->view->render('agregardron/index');
    }
    

    function CrearDron(){
        $nombre = $_POST['nombre'];
        $cantpedidos    = $_POST['cantpedidos'];
        $status    = 1;
        $mensaje ="";

        if($this->model->insertDron(['nombre'=>$nombre,'cantpedidos'=>$cantpedidos,'status'=>$status])){
            $mensaje ="Dron Agregado"; 
        }
        else{
            $mensaje = "El nombre ya esta asignado a otro Dron";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
        
       
    }
}