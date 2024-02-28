
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Usuarios</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styleusuario.css">
</head>

<body>

  <div class="cabecera">
    <div class="lineas"></div>
      <header>Administración de usuarios</header>
    <div class="lineas"></div>
  </div>


  <form class="form  ">

        <div class="form-group">
          <label for="date" class="form-label">Buscar por fecha</label>
          <input type="date" class="form-control form-control-sm" id="date" name="date" />
        </div>

        <div class="form-group">
          <label for="nombre" class="form-label"></label>
          <input type="text" class="form-control form-control-sm" placeholder="Buscar" id="buscar" name="Buscar" />
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Buscar</button>
          </div>
        </div>

  </form>


    <div class="container mt-4 botones">

     
      <header class="header-table text-end"> 
          <a href="" class="btn btn-insert" style="background-color: #052659; color: #fff; border: transparent;" data-toggle="modal" data-target="#myModalinsert">Agregar Usuario</a>
          <a href="" class="btn btn-excel" style="background-color: #132e35; color: #fff; border: transparent;">Excel</a>
          <a href="" class="btn btn-pdf"style="background-color: #541a2e; color: #fff; border: transparent;">PDF</a>
      </header>

      <form action="../model/insert_usuario.php" method="POST">
      <!-- Formulario emergente (modal) -->
      <div class="modal " id="myModalinsert">
        <div class="modal-dialog">
          <div class="modal-content ">

            <!-- Encabezado del modal -->
            <div class="modal-header">
              <h4 class="modal-title text-center">Agregando nuevo usuario</h4>
              
            </div>

            
            <!-- Contenido del modal (formulario) -->
            <div class="modal-body input-box">

              <div class="col-md-5 input-field">
                <input type="text" class="input" id="nombre_usuarioo" name="nombre_usuario" required="" autocomplete="off">
                <label for="nombre_usuario">Nombre</label> 
              </div>

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="apellido_usuario" name="apellido_usuario" required="" autocomplete="off">
                    <label for="apellido_usuario">Apellido</label> 
              </div>

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="identidad_usuario" name="identidad_usuario" required="">
                    <label for="identidad_usuario">No. Identidad</label>
              </div> 

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="direccion_usuario" name="direccion_usuario" required="" autocomplete="off">
                    <label for="direccion_usuario">Dirección</label> 
              </div>

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="tele_usuario" name="tele_usuario" required="">
                    <label for="tele_usuario">Teléfono</label>
              </div>

             <!-- <div class="col-md-5 input-field">
                    <input type="text" class="input" id="casa" required="" autocomplete="off">
                    <label for="casa">No. de casa</label> 
              </div>

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="cuadra" required="">
                    <label for="cuadra">No. de cuadra</label>
              </div>-->

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="correo_usuario" name="correo_usuario" required="" autocomplete="off">
                    <label for="correo_usuario">Correo electrónico</label> 
              </div>

              <div class="col-md-5 input-field">
                    <input type="text" class="input" id="apodo_usuario" name="apodo_usuario" required="">
                    <label for="apodo_usuario">Nombre de usuario</label>
              </div>

              <div class="col-md-5 input-field">
                    <input type="password" class="input" id="contra_usuario" name="contra_usuario" pattern=".{8,32}" title="Debe contener al menos 8 caracteres, una mayúscula, un número y un carácter especial" required="">
                    <label for="contra_usuario">Contraseña</label>
              </div>

              <div class="col-md-5 input-field">
                    <input type="password" class="input" id="contra_usuario" name="contra_usuario" pattern=".{8,32}" title="Debe contener al menos 8 caracteres, una mayúscula, un número y un carácter especial" required="">
                    <label for="contra_usuario">Confirmar contraseña</label>
              </div>


            </div>
            
            <!-- Pie del modal -->  
             <div class="modal-footer">
              <div class="col-md-5 input-field">                        
                <input type="submit" class="submit" value="Agregar usuario">
              </div>
              
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>

          </div>
        </div>
      </div>
     </form>
    </div>





  <div class="container mt-3">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Activar/Desactivar</th>
              </tr>
            </thead>

            <tbody>
              <tr class="celdas">
                <?php
            include '../php/conexion.php';
                            // Consulta para obtener los datos de los usuarios
                            $sql = "SELECT usuarios.idusuario, usuarios.nombre_usuario, usuarios.contra_usuario, usuarios.correo_usuario, usuarios.tele_usuario,
                            usuarios.direccion_usuario, usuarios.Habilitar_desahabilitar, estado.estado, usuarios.apellido_usuario,
                            usuarios.identidad_usuario, usuarios.apodo_usuario
                     FROM usuarios
                     INNER JOIN estado ON usuarios.idestado = estado.idestado;";
                            $result = $conexion->query($sql);

                            // Mostrar los datos de los usuarios en la tabla
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["idusuario"] . "</td>";
                                    echo "<td>" . $row["nombre_usuario"] . " " . $row["apellido_usuario"] . "</td>";
                                    echo "<td>" . $row["apodo_usuario"] . "</td>";
                                    echo "<td>Rol</td>"; // Reemplazar "Rol" por el campo correspondiente en tu base de datos
                                    echo "<td>" . $row["correo_usuario"] . "</td>";
                                    echo "<td>" . $row["tele_usuario"] . "</td>";
                                    echo "<td>" . $row["direccion_usuario"] . "</td>";
                                    echo "<td>" . $row["estado"] . "</td>";
                                    //echo "<td>" . $row["Habilitar_desahabilitar"] . "</td>";
                                    echo "<td><button type='button' class='btn btn-warning btn-sm' style='width: 100%;' data-toggle='modal' data-target='#myModalEdit' onclick='abrirModalEditar(" . $row["idusuario"] . ")'>Editar</button></td>";
                                    echo "<td><div class='form-check form-switch'>";
                                    echo "<input class='form-check-input text-center' type='checkbox' role='switch' id='flexSwitchCheckDefault'>";
                                    echo "<label class='form-check-label' for='flexSwitchCheckDefault'>Configurar</label>";
                                    echo "</div></td>";
                                }
                            } else {
                                echo "<tr><td colspan='10'>No se encontraron resultados</td></tr>";
                            }
                            $conexion->close();
                            ?>



                <div class="container mt-4 botones">

                 <!--<div class="container mt-3 text-center">
                    <td><a href="#" class="btn btn-warning btn-sm" style="width: 100%;" data-toggle="modal" data-target="#myModalEdit">Editar</a></td>
                  </div>-->
            
                  <!-- Formulario emergente (modal) -->
                  <div class="modal " id="myModalEdit">
                    <div class="modal-dialog">
                      <div class="modal-content ">
            
                        <!-- Encabezado del modal -->
                        <div class="modal-header">
                          <h4 class="modal-title text-center">Editando usuarios</h4>
                          
                        </div>
            
                        <!-- Contenido del modal (formulario) -->
                        <div class="modal-body input-box">
                          
                          <div class="col-md-5 input-field">
                            <input type="text" class="input" id="nombre" required="" autocomplete="off">
                            <label for="nombre">Nombre y apellido</label> 
                          </div>
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="identidad_usuario" required="">
                                <label for="identidad_usuario">No. Identidad</label>
                          </div> 
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="direccion" required="" autocomplete="off">
                                <label for="direccion">Dirección</label> 
                          </div>
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="telefono" required="">
                                <label for="telefono">Teléfono</label>
                          </div>
            
                          <!--<div class="col-md-5 input-field">
                                <input type="text" class="input" id="casa" required="" autocomplete="off">
                                <label for="casa">No. de casa</label> 
                          </div>
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="cuadra" required="">
                                <label for="cuadra">No. de cuadra</label>
                          </div>-->
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="correo" required="" autocomplete="off">
                                <label for="correo">Correo electrónico</label> 
                          </div>
            
                          <div class="col-md-5 input-field">
                                <input type="text" class="input" id="usuario" required="">
                                <label for="usuario">Nombre de usuario</label>
                          </div>
            
                          <div class="col-md-5 input-field">
                                <input type="password" class="input" id="pass" required="">
                                <label for="pass">Contraseña</label>
                          </div>
            
                          <div class="col-md-5 input-field">
                          <input type="password" class="input" id="contra_usuario" name="contra_usuario" pattern=".{8,32}" title="Debe contener al menos 8 caracteres, una mayúscula, un número y un carácter especial" required="">
                         <label for="contra_usuario">Confirmar contraseña</label>
                          </div>
            
            
                        </div>
            
                        <!-- Pie del modal -->  
                        <div class="modal-footer">
                          <div class="col-md-5 input-field">                        
                            <input type="submit" class="submit" value="Editar usuario">
                          </div>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
            
                      </div>
                    </div>
                  </div>
                </div>

 
                <td>
                 <!-- <div class="form-check form-switch ">
                    <input class="form-check-input text-center" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Configurar</label>
                  </div>-->
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<script>
    // Función para abrir el modal de edición
    function abrirModalEditar(id_etnia, etnia, descripcion, correo, usuario, estado) {
        document.getElementById("id_etnia").value = id_etnia;
        document.getElementById("etnia").value = etnia;
        document.getElementById("descripcion").value = descripcion;
        document.getElementById("estado").value = estado;

        $('#modalEditar').modal('show'); // Mostrar el modal de edición
    }
</script>

<script>
    $(document).ready(function() {
        $("#formularioEditar").on("submit", function(event) {
            event.preventDefault();

            $.ajax({
                url: "modelos/editar_departamento.php",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    if (response == "success") {
                        Swal.fire({
                            title: "Departamento actualizado correctamente",
                            text: "El Departamento se ha actualizado correctamente.",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonText: "Cerrar"
                        }).then(function() {
                            $("#modalEditar").modal("hide");
                            location.reload(); // Recarga la página
                        });
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: "Hubo un problema al actualizar el departamento.",
                            icon: "error",
                            confirmButtonText: "Cerrar"
                        }).then(function() {
                            location.reload(); // Recarga la página
                        });
                    }
                }
            });
        });
    });
</script>
</html>
