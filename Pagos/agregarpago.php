<?php
  include("../conexionbd.php");
  include ("../Navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <!-- Enlaces a estilos -->
  <link rel="stylesheet" href="StylesRegistro1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="C:\xampp\htdocs\Regi_proyect\css\agregarpago.css">
  <title>Agregar pago</title>
  </head>
  <body>
    <div class="wrapper">
        <div class="container main">
            <div class="row g-3 input-box">  
                <header>Agregar pago</header>
      
                <div class="divisor"></div>
      
                <div class="col-md-4 input-field">
                  <input type="text" class="input" id="nombre_usuarioo" name="nombre_usuario" required="" autocomplete="off">
                  <label for="nombre_usuario">Nombre</label> 
                </div>
  
                <div class="col-md-4 input-field">
                  <input type="text" class="input" id="apellido_usuario" name="apellido_usuario" required="" autocomplete="off">
                  <label for="apellido_usuario">Apellido</label> 
                </div>

               <div class="col-md-4 input-field">
                 <input type="text" class="input" id="usuario" name="usuario" required="">
                 <label for="usuario">Usuario</label>
               </div> 

               <div class="col-md-4 input-field">
                 <input type="text" class="input" id="nombre_rol" name="nombre_rol" required="" autocomplete="off">
                 <label for="nombre_rol">Rol</label> 
               </div>

               <div class="col-md-4 input-field">
                 <input type="text" class="input" id="nombre_servicio" name="nombre_servicio" required="">
                 <label for="nombre_servicio">Servicio a pagar</label>
               </div>

               <div class="col-md-4 input-field">
                 <input type="number" class="input" id="cost_servicio" name="cost_servicio" required="" autocomplete="off">
                 <label for="cost_servicio">Monto</label> 
               </div>

               <div class="col-md-4 input-field">
                 <input type="number" class="input" id="" name="" required="">
                 <label for="">No. de referencia</label>
               </div>

               <div class="col-md-4 input-field">
                 <input type="number" class="input" id="no_registro_banco" name="no_registro_banco" required="" autocomplete="off">
                 <label for="no_registro_banco">No. cuenta a depositar</label> 
               </div>

               <div class="col-md-4 input-field">
                 <input type="date" class="input" id="fech_inicio" name="fech_inicio" required="">
                 <label for="fech_inicio"></label>
               </div>
                  <!-- Nose en que parte de la base de datos se va a guardar la img -->
               <div class="custom-button">
                <input type="file" id="inputImagen" name="inputImagen" accept="image/*">
                <label for="inputImagen">
                    <img src="foto.png" alt="Subir Imagen">
                    <span>Subir Comprobante</span>
                </label>
               </div>

               <div class="col-md-4 input-field">                        
                <input type="submit" class="submit" value="Registrarse">
               </div> 
               <div class="divisor"></div>
            </div>
        </div>
    </div>
  </body>
</html>
