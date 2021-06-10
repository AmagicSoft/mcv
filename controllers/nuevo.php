<?php

    class Nuevo extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje="";
           // echo "<p>Nuevo controlador Main</p>";
        }

        function render(){
            $this->view->render('nuevo/index');
        }

        function CrearRuta(){
            $cliente = $_POST['cliente'];
            $ruta    = $_POST['ruta'];
            $pedido  = $_POST['pedido'];
            $dron  = $_POST['dron'];

            $mensaje ="";

            if($this->model->insert(['cliente'=>$cliente,'ruta'=>$ruta,'pedido'=>$pedido,'dron'=>$dron])){
                $mensaje = "Ruta Creada"; 
            }
            else{
                $mensaje = "El pedido ya fue asignado";
            }
            $this->view->mensaje = $mensaje;
            $this->render();
            
           
        }
    }

   
?>