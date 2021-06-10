<?php

    class ReporteDron extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->drones = [];
           // $this->view->render('reporte/index');
           // echo "<p>Nuevo controlador Main</p>";
        }

        function render(){
            $drones =  $this->model->getDron();
            $this->view->drones = $drones;            
            $this->view->render('reportedron/index');
        }

        function DetalleRuta(){

        }

        function EditRuta(){
            
        }

        function DeleteRuta(){
            
        }

        
    }