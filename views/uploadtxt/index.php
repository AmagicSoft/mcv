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
       <h1 class="center">Agregar txt Rutas</h1>
            <div class="center"> <?php echo $this->mensaje; ?></div>
       <form action="<?php echo constant('URL')?>uploadtxt/CrearRutas" method="POST">
           

           <p>
               <label for="txt"> TXT</label><br>
               <input type="file" name="txt" id="txt" required>
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
