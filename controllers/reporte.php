<?php

    class Reporte extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->rutas = [];
           // $this->view->render('reporte/index');
           // echo "<p>Nuevo controlador Main</p>";
        }

        function render(){
            $rutas =  $this->model->get();
            $this->view->rutas = $rutas;            
            $this->view->render('reporte/index');
        }

        function DetalleRuta($param=null){
            //var_dump($param);
            $idRuta=$param[0];
            $ruta = $this->model->getById($idRuta);

            $this->view->ruta = $ruta;
            $this->view->mensaje ="";
            $this->view->render('reporte/detalleruta');

        }

        function GeneraraReporteRuta(){

            $dron = $_POST['dron'];
            var_dump($dron);
            
        }

        

        
    }

   
?>