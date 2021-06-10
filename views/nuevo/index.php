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
       <h1 class="center">Agregar nueva ruta</h1>
            <div class="center"> <?php echo $this->mensaje; ?></div>
       <form action="<?php echo constant('URL')?>nuevo/CrearRuta" method="POST">
           <p>
               <label for="cliente">Cliente</label><br>
               <input type="text" name="cliente" id="cliente" required>
           </p>

           <p>
               <label for="ruta"> Código Ruta </label><br>
               <input type="text" name="ruta" id="ruta" required>
           </p>

           <p>
               <label for="pedido"> Pedido</label><br>
               <input type="text" name="pedido" id="pedido" required>
           </p>

           <p>
               <label for="dron"> Dron</label><br>
               <input type="text" name="dron" id="dron" required>
           </p>
                <br><br>
           <p>
                <input type="submit" value="Crear Ruta">               
           </p>
       </form>
       </div>
        <?php     require 'views/footer.php';       ?>
</body>
</html>
