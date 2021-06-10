<?php

class NuevoModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function insert($data){
        try{
            $query = $this->db->connect()->prepare('INSERT INTO RUTAS (cliente,coderuta,pedido,dron) VALUES (:cliente, :ruta, :pedido, :dron)');
            $query->execute(['cliente'=>$data['cliente'],'ruta'=>$data['ruta'],'pedido'=>$data['pedido'],'dron'=>$data['dron']]);
            //echo "Insertar datos";
            return true;
                
        }
        catch(PDOException $e){
            //echo $e->getMessage();
            return false;
        }       
        
    }

    
}
?>