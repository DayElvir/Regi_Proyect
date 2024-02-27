
<?php 

include("./conexionbd.php");

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
        class="<?php echo $modulos== 'index'? 'Active': '' ; ?>" href="?p=index"
        role="button"
        >Cancelar</a
      >

      </form>

    </div>
  
    class="btn btn-primary <?php echo $modulos== 'index'? 'Active': '' ; ?>" 
        href="?p=index"



