<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="http://localhost/regi_proyect/css/navbar.css" rel="stylesheet" type="text/css"/>
  <title>Regi</title>
</head>
<body>


  <nav class="navbar navbar-expand-lg sticky-top">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <!-- <img src="r02.png" alt="Logo" height="60" width="60"> -->
    </a>

    <!-- Botón de hamburguesa para dispositivos móviles -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenedor de los elementos del navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">


      <!-- Dropdowns a la izquierda -->
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/regi_proyect/index.php"   role="button" aria-haspopup="true" aria-expanded="false">
          <i class="bi bi-building"></i> Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="dropdownLeft1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-collection"></i></i>Servicios
          </a>
          <div class="dropdown-menu dropdown-menu-custom " aria-labelledby="dropdownLeft1">
           
          <a class="dropdown-item " href="http://localhost/regi_proyect/servicios/index.php">Agregar servicios <a/>
         <a class="dropdown-item" href="http://localhost/regi_proyect/pagos/agregarpago.php">Pagar servicios <a/>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownLeft2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-bar-chart-line"></i>Estadísticas
          </a>
          <div class="dropdown-menu dropdown-menu-custom " aria-labelledby="dropdownLeft2">
            <a class="dropdown-item" href="#">Historial de pago</a>
            <a class="dropdown-item" href="#">Deudores</a>
            <a class="dropdown-item" href="#">Pagados</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownLeft3"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-clipboard2"></i>Administración
          </a>
          <div class="dropdown-menu dropdown-menu-custom " aria-labelledby="dropdownLeft3">
            <a class="dropdown-item" href="#">Administrar usuarios</a>
            <a class="dropdown-item" href="#">Administrar roles</a>
          </div>
        </li>
      </ul>

      <!-- Enlaces y dropdown a la derecha -->
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item">


          <div class="navbar-icon-container">
            <a class="nav-link navbar-icon" href="#"><i class="bi bi-chat-square-text"></i></a>
            <div class="navbar-alert">Ver Mensajes</div>
          </div>

        </li>

        <li class="nav-item">
          <div class="navbar-icon-container">
            <a class="nav-link navbar-icon" href="#"><i class="bi bi-bell"></i></a>
            <div class="navbar-alert">Ver Notificaciones</div>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownRight" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-custom dropdown-menu-right dropdown-menu-center" aria-labelledby="dropdownRight">
            <a class="dropdown-item " href="#"><i class="bi bi-person"></i>Mi perfil</a>
            <a class="dropdown-item double-height" href="#"><i class="bi bi-box-arrow-right"></i>Salir</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- Agregar los scripts de Bootstrap (jQuery y Popper.js) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



