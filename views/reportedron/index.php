<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php     require 'views/header.php';       ?>
       <div id="main">
         <h1 class="center">Reporte Drones</h1>
        <table width="100%" >
            <thead>
                <tr>
                   <th>id</th> 
                   <th>Nombre</th> 
                   <th>Capacidad de Pedidos</th> 
                   <th>status</th> 
                </tr>

            </thead>
            <tbody>
            <?php 
                //include 'models/rutasmodel.php';
                foreach ($this->drones as $row) {
                    $Drones = new Dron();
                    $Drones = $row; ?>
                <tr>
                    <td><?php echo $Drones->id; ?></td>  
                    <td><?php echo $Drones->nombre; ?></td>  
                    <td><?php echo $Drones->cantpedidos; ?></td>   
                    <td><?php echo $Drones->status; ?></td>   
                    <td><a href="#">Editar</></td> 
                    <td><a href="#">Eliminar</></td> 
                </tr>

            <?php
                } ?>    
            </tbody>
        </table>
            
       </div>
        <?php     require 'views/footer.php';       ?>
</body>
</html>
