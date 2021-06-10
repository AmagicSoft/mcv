<?php

class AgregarDronModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insertDron($data){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO DRON (nombre,cantpedidos,status) VALUES (:nombre, :cantpedidos, :status)');
            $query->execute(['nombre'=>$data['nombre'],'cantpedidos'=>$data['cantpedidos'],'status'=>$data['status']]);
            //echo "Insertar datos";
            return true;                
        }
        catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }       
        
    }
}
?>