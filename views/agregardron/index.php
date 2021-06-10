<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

      <?php     require 'views/header.php';  ?>
       <div id="main">
       <h1 class="center">Agregar Dron </h1>

       <div class="center"> <?php echo $this->mensaje; ?></div>

       <form action="<?php echo constant('URL')?>agregardron/CrearDron" method="POST">
           <p>
               <label for="nombre">Nombre</label><br>
               <input type="text" name="nombre" id="nombre" required>
           </p>

           <p>
               <label for="cantpedidos"> Capacidad de pedidos</label><br>
               <input type="text" name="cantpedidos" id="cantpedidos" required>
           </p>
                <br><br>
           <p>
                <input type="submit" value="Agregar Dron">               
           </p>
       </form>
       </div>
        <?php     require 'views/footer.php'; ?>
</body>
</html>