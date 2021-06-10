<?php

include_once 'models/dronmodel.php';

class ReporteDronModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getDron(){
        $items =[];

        try{
            $query = $this->db->connect()->query("SELECT * FROM DRON");
            while($row = $query->fetch()){
                $item = new Dron();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
                $item->cantpedidos = $row['cantpedidos'];
                $item->status = $row['status'];

                array_push($items,$item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
            
        
    }

    
}
?>