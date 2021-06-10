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
         <h1 class="center">Reporte de Rutas</h1>
         <div>
             
                <p><a href="in01.txt" target="_blank" >Ruta Dron 1</a></p>
                <p><a href="in02.txt" target="_blank" >Ruta Dron 2</a></p>
                <p><a href="in03.txt" target="_blank" >Ruta Dron 3</a></p>
         
         </div>
         
        <table width="100%" >
            <thead>
                <tr>
                   <th>Cliente</th> 
                   <th>Ruta</th> 
                   <th>Pedido</th> 
                   <th>Dron</th> 
                   <th>Coordenadas</th> 
                </tr>

            </thead>
            <tbody>
            
            <?php 
                //include 'models/rutasmodel.php';
                //$archivo = fopen('in01.txt','a'); 
                
                
                foreach ($this->rutas as $row) {
                    $Rutas = new Ruta();
                    $Rutas = $row; ?>
                <tr>
                    <td><?php echo $Rutas->cliente; ?></td>  
                    <td><?php echo $Rutas->ruta; ?></td>  
                    <td><?php echo $Rutas->pedido; ?></td>  
                    <td><?php echo $Rutas->dron; ?></td>  
                    <td><?php echo $Rutas->coordenadas; ?></td>  
                    <!-- <td><a href="<?php echo constant('URL') . 'reporte/DetalleRuta/' . $Rutas->id ?>">Editar</></td>  -->
                    <!-- <td><a href="<?php echo constant('URL') . 'reporte/DeleteRuta/' . $Rutas->id ?>">Eliminar</></td>  -->
                </tr>

            <?php
            } //fin foreach
               
               
               ?>    
            </tbody>
        </table>
            
       </div>
        <?php     require 'views/footer.php';       ?>
</body>
</html>
