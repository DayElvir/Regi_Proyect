
<?php 

include("../../conexionbd.php");

if($_POST){
   //Almacenacion de datos o recepcion
   $nombre=(isset($_POST['nombreservicio'])) ? $_POST['nombreservicio'] :"";
   $descripcion=(isset($_POST['descripcion'])) ? $_POST['descripcion'] :"";
   $costoservicio=(isset($_POST['costoservicio'])) ? $_POST['costoservicio'] :"";
   $iniciar=(isset($_POST['iniciar'])) ? $_POST['iniciar'] :"";
   $final=(isset($_POST['final'])) ? $_POST['final'] :"";
   $creacion=(isset($_POST['creacion'])) ? $_POST['creacion'] :"";
     
   $sentencia=$conexion->prepare("INSERT INTO `servicios` (`idservicio`, `nombre_servicio`, `desc_servicio`, `cost_servicio`, `fech_inicio`, `fech_final`, `actualizado_por`) 
   VALUES (NULL, :nombreservicio, :descripcion, :costoservicio , :iniciar, :final, :creacion);");
   

  $sentencia->bindParam(  ":nombreservicio",$nombre  );
  $sentencia->bindParam(":descripcion",$descripcion );
  $sentencia->bindParam(":costoservicio",$costoservicio );
  $sentencia->bindParam(":iniciar",$iniciar);
$sentencia->bindParam(":final",$final);
$sentencia->bindParam(":creacion",$creacion);


   $sentencia->execute();
    
  
}

include("../../header.php");
?>



<div class="card">
    <div class="card-header">
        Crear Servicio</div>
    <div class="card-body">
      <form action="" enctype="multipart/form-data" method="post">
       
      <div class="mb-3">
            <label for="nombreservicio" class="form-label">Nombre del servicio</label>
            <input
                type="text"
                class="form-control"
                name="nombreservicio"
                id="nombreservicio"
                aria-describedby="helpId"
                placeholder=" Escriba el nombre del servicio "  />
        </div>
        
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input
                type="text"
                class="form-control"
                name="descripcion"
                id="descripcion"
                aria-describedby="helpId"
                placeholder=" Escriba una breve descripción "  />
        </div>
        
        <div class="mb-3">
            <label for="costoservicio" class="form-label">Costo</label>
            <input
                type="numeric"
                class="form-control"
                name="costoservicio"
                id="costoservicio"
                aria-describedby="helpId"
                placeholder=" Escriba el precio a pagar "  />
        </div>
      
        <div class="mb-3">
            <label for="iniciar" class="form-label">Iniciar Pago</label>
            <input
                type="date"
                class="form-control"
                name="iniciar"
                id="iniciar"
                aria-describedby="helpId"  />
        </div>





        <div class="mb-3">
            <label for="final" class="form-label">Fecha final</label>
            <input
                type="date"
                class="form-control"
                name="final"
                id="final"
                aria-describedby="helpId"  />
        </div>
   
        <div class="mb-3">
            <label for="creacion" class="form-label">Creado por:</label>
            <input
                type="text"
                class="form-control"
                name="  creacion"
                id="creacion"
                aria-describedby="helpId"
                placeholder="Escriba su nombre de usuario "  />
        </div>
       <button
        type="submit"
        class="btn btn-success"
       >
        Agregar
       </button>
       
      <a
        name=""
        id=""
        class="btn btn-primary"
        href="index.php"
        role="button"
        >Cancelar</a
      >

      </form>

     bs5-na


      <!-- Nav tabs -->
      <ul
        class="nav nav-tabs"
        id="navId"
        role="tablist"
      >
        <li class="nav-item">
            <a
                href="#tab1Id"
                class="nav-link active"
                data-bs-toggle="tab"
                aria-current="page"
                >Active</a
            >
        </li>
        <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Dropdown</a
            >
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#tab5Id" class="nav-link" data-bs-toggle="tab"
                >Another link</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link disabled" data-bs-toggle="tab"
                >Disabled</a
            >
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
            
        </div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
      </div>
      
      <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
      <script>
        var triggerEl = document.querySelector("#navId a");
        bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
      </script>
      


    </div>
  




