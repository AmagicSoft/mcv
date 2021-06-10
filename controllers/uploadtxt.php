<?php
    class UploadTxt extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->mensaje="";
           // echo "<p>Nuevo controlador Main</p>";
        }

        function render(){
            $this->view->render('uploadtxt/index');
        }

        function CrearRutas(){
            $txt = $_POST['txt'];
           // var_dump($txt);
            $mensaje ="";

            $fp = fopen($txt, "r") or die("Error al leer ".$txt); 
            $pedido=40;
            $cliente="Mv1";
            $dron=3;
            while(!feof($fp)) {
                $pedido++;

                $ruta = fgets($fp);
                
                //echo $ruta . "<br />";
                if($this->model->insertxt(['cliente'=>$cliente,'ruta'=>$ruta,'pedido'=>$pedido,'dron'=>$dron])){
                    $mensaje = "Rutas Creadas coon éxito"; 
                }
                else{
                    $mensaje = "El pedido ya fue asignado";
                }
                
                }           
            $linea = fgets($fp);
            fclose($fp);
            //echo $txt;   
            $this->view->mensaje = $mensaje;
            $this->render();
            
           
        }
    }

   
?>