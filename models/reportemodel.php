<?php

include_once 'models/rutasmodel.php';

class ReporteModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get(){
        $items =[];

        try{
            $query = $this->db->connect()->query("SELECT * FROM rutas ORDER BY dron ASC;");
            $posicioInicial=array("0","0","N");
            $A=1;
            $I=90;//IZQUIERDA
            $D=90;//DERECHA
            $X=0;
                    $Y=0;
                    $L="N";
            $NumEntrega=1;
            
            $miarchivo=fopen('in01.txt','w');
            $miarchivo=fopen('in02.txt','w');
            $miarchivo=fopen('in03.txt','w');
            
            while($row = $query->fetch()){
                $item = new Ruta();

                $coordenadas="";

                $miarchivo=fopen('in0'.$row['dron'].'.txt','a+');//abrir archivo, nombre archivo, modo apertura
                
               
                $l="";//letra anterior , antes de ultimo giro
                // Recorremos cada carácter de la cadena
                //echo "numero de Entrga: ".$NumEntrega;
                if($NumEntrega==4){
                    $NumEntrega=1;
                }
                if ($NumEntrega==1) {                     
                    $X=0;
                    $Y=0;
                    $L="N";//Letra actual
                    $coordenadas=$X.",".$Y.",".$L;
                    // echo "<br>";
                    // echo "Coordenada Inicial =".$coordenadas;
                    // echo "<br>";
                    // echo "Primera vez <br>";
                    $coordenadas=$X.",".$Y.",".$L;
                    
                }else{
                    
                    $coordenadas=$X.",".$Y.",".$L;
                    //     echo "<br>";
                    //     echo "Coordenada INicial =".$coordenadas;
                    //     echo "<br>";
                    // echo "NO es Primera vez <br>";
                }
                $cadena=$row['coderuta'];
                
                // echo $cadena;
                // echo "<br>";

                for($i=0;$i<strlen($cadena);$i++)
                {
                    
                    if($cadena[$i]=="I"){
                        if($L=="N"){
                            $l=$L;
                            $L="O";
                            
                        }
                        else if($L=="O"){
                            $l=$L;
                            $L="S";
                        }
                        else if($L=="S"){
                            $l=$L;
                            $L="E";
                        }
                        else if($L=="E"){
                            $l=$L;
                            $L="N";
                        }
                    }
                    //$l=$L;
                    if($cadena[$i]=="D"){
                        if($L=="N"){
                            $l=$L;
                            $L="E";
                        }
                        else if($L=="E"){
                            $l=$L;
                            $L="S";
                        }
                        else if($L=="S"){
                            $l=$L;
                            $L="O";
                        }
                        else if($L=="O"){
                            $l=$L;
                            $L="N";
                        }
                    }                    
                //echo "L = ".$L." <br>";                        
                        switch ($L) {
                            
                            case "N":
                                //Positivo de la Y
                                if($cadena[$i]=="A"){  
                                    if($Y<0){
                                        $Y=$Y*-1;
                                    }                                   
                                      $Y=$Y+1;                                  }  
                            break;
                            case "E":
                                //Positivo de la X
                                if($cadena[$i]=="A"){
                                    if($X<0){
                                        $X=$X*1;
                                    } 
                                        $X=$X+1;                                    
                                }
                            break;
                            case "S":
                                //Negativo de la Y                                 
                                if($cadena[$i]=="A"){
                                    if($Y>0){
                                        $Y=$Y*1;
                                    } 
                                        $Y=$Y-1;
                                }
                            break;
                            case "O":
                                //Nogativo de la X
                                if($cadena[$i]=="A"){ 
                                    //echo "X antes: ".$X."<br>";  
                                    if($X>0){
                                        $X=$X*-1;
                                    }                                
                                        $X=$X-1;
                                }
                            break;
                        }   
                }
                $NumEntrega++;
                $coordenadas=$X.",".$Y.",".$L;

                $item->id = $row['id'];
                $item->cliente = $row['cliente'];
                $item->ruta = $row['coderuta'];
                $item->pedido = $row['pedido'];
                $item->dron = $row['dron'];
                
                $item->coordenadas = $coordenadas;
                fwrite($miarchivo, $coordenadas."\r\n");
                
               // echo "Tu archivo se ha guardado con el nombre in01.txt";               

                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
            
        fclose($miarchivo); //cerrar archivo
        
        // die();
    }

    public function getById($id){
        $item = new Ruta();
        $query = $this->db->connect()->prepare("SELECT * FROM RUTAS WHERE id=:id");
        try{
           $query->execute(['id'=> $id]) ;
           while ($row = $query->fetch()) {
                $item ->id =$row['id'];
                $item ->cliente =$row['cliente'];
                $item ->ruta =$row['coderuta'];
                $item ->pedido =$row['pedido'];
                $item ->dron =$row['dron'];
           }
           return $item;
        }catch(PDOException $e){
            return [];
        }
    }

    
}
?>