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
       <h1 class="center">Detalle de Ruta para el pedido <?php echo $this->ruta->pedido; ?></h1>
            <div class="center"> <?php echo $this->mensaje; ?></div>
       <form action="<?php echo constant('URL')?>reporte/CrearRuta" method="POST">
           <p>
               <label for="cliente">Cliente</label><br>
               <input type="text" name="cliente" value="<?php echo $this->ruta->cliente; ?>" required>
           </p>

           <p>
               <label for="ruta"> Código Ruta </label><br>
               <input type="text" name="ruta" value="<?php echo $this->ruta->ruta; ?>"required>
           </p>

           <p>
               <label for="pedido"> Pedido</label><br>
               <input type="text" name="pedido" value="<?php echo $this->ruta->pedido; ?>" required>
           </p>

           <p>
               <label for="dron"> Dron</label><br>
               <input type="text" name="dron" value="<?php echo $this->ruta->dron; ?>"required>
           </p>
                <br><br>
           <p>
                <!-- s<input type="submit" value="Crear Ruta">                -->
           </p>
       </form>
       </div>
        <?php     require 'views/footer.php';       ?>
</body>
</html>
