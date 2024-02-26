
<?php 

include("../../conexionbd.php");

if($_POST){
   //Almacenacion de datos o recepcion
   $nombre=isset($_POST["nombre"]) ? $_POST["nombre"] :"";
   $descripcion=isset($_POST["descripcion"]) ? $_POST["descripcion"] :"";
   $costo=isset($_POST["costo"]) ? $_POST["costo"] :"";
   $inicio=isset($_POST["inicio"]) ? $_POST["inicio"] :"";
   $final=isset($_POST["final"]) ? $_POST["final"] :"";
   $creacion=isset($_POST["creacion"]) ? $_POST["creacion"] :"";
     
   //echo $descripcion;
  //conexion de base de datos
 $sentencia=$conexion->prepare(" INSERT INTO `servicio` 
 (`ID`,`nombre_servicio`, `desc_servicio`, 
 `cost_servicio`, `fech_inicio`, `fech_final`, 
 `actualizado_por`) VALUES
  (NULL, :nombre,:descripcion,
   :costo, :inicio, :final, :creacion); ");
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":descripcion",$descripcion);
    $sentencia->bindParam(":costo",$costo);
    $sentencia->bindParam(":inicio",$inicio);
   $sentencia->bindParam(":final",$final);
   $sentencia->bindParam(":creacion",$creacion);
   //$sentencia->execute();
}

//include("../../header.php");
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
                name="nombre"
                id="nombre"
                aria-describedby="helpId"
                placeholder=" Escriba el nombre del servicio "  />
        </div>
        
        <div class="mb-3">
            <label for="Descrip" class="form-label">Descripción</label>
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
                type="number"
                class="form-control"
                name="costo"
                id="costo"
                aria-describedby="helpId"
                placeholder=" Escriba el precio a pagar "  />
        </div>
      
        <div class="mb-3">
            <label for="inicio" class="form-label">Fecha de Inicio</label>
            <input
                type="date"
                class="form-control"
                name=inicio"
                id="inicio"
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
            <label for="creado" class="form-label">Creado por:</label>
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


    </div>
    <div class="card-footer text-muted">Footer</div>
</div>




