<?php 

include ("../navbar.php");
include("../conexionbd.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="css/Roles.css">
  <title>Roles</title>
</head>
<body>
  
  <div class="container mt-4">

    <header>Roles en REGI</header>


    <table class="table custom-table">
      <thead>
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col" class="text-center">Nombre de rol</th>
          <th scope="col" class="text-center">Tipo de rol</th>
          <th scope="col" class="text-center">Creado por</th>
          <th scope="col" class="text-center">Asignado ha</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th scope="row" class="text-center">1</th>
          <td>Rol 1</td>
          <td>rol</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row" class="text-center">2</th>
          <td>Rol 2</td>
          <td>rol</td>
          <td>@fat</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row" class="text-center">3</th>
          <td>Rol 3</td>
          <td>rol</td>
          <td>@twitter</td>
          <td>@mdo</td>
        </tr>
      </tbody> 
    </table>


    <div class="container mt-4">
      <!-- Botón para abrir el formulario emergente -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Crear nuevo rol
      </button>
    
      <!-- Formulario emergente (modal) -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
    
            <!-- Encabezado del modal -->
            <div class="modal-header">
              <h4 class="modal-title">Creando un nuevo rol</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    
            <!-- Contenido del modal (formulario) -->
            <div class="modal-body input-box">

                    <div class="col-md-4 input-field">
                          <input type="text" class="input" id="nombrerol" required="" autocomplete="off">
                          <label for="nombrerol">Nombre del rol</label> 
                    </div>

                    <div class="col-md-4 input-field">
                          <input type="text" class="input" id="tiporol" required="">
                          <label for="tiporol">Tipo del rol</label>
                      </div> 

                      <div class="col-md-4 input-field">
                          <input type="text" class="input" id="creadopor" required="" autocomplete="off">
                          <label for="creadopor">Creado por</label> 
                    </div>

                    <div class="col-md-4 input-field">
                          <input type="text" class="input" id="asignadoha" required="">
                          <label for="asignadoha">Asignado ha</label>
                      </div>

            </div>
    
            <!-- Pie del modal -->
             
            <div class="modal-footer">
              <div class="col-md-4 input-field">                        
                <input type="submit" class="submit" value="Crear rol">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
    
          </div>
        </div>
      </div>
    </div>

  </div>

  
  


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
