<?php 
include("../conexionbd.php");
include("../navbar.php");

//Seleccionar la tabla de servicio
$sentencia=$conexion->prepare("SELECT * FROM `servicios`" );
$sentencia->execute();
$lista_servicios=$sentencia-> fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card">
    <div class="card-header">
        
    <a
        name=""
        id=""
        class="btn btn-primary bi bi-arrow-left "
        href="index.php"
        role="button"
        ></a
    >
    </div>
    <div class="card-body">
   <div
    class="table-responsive-sm"
   >
    <table
        class="table table"
    >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre servicio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Costo</th>
                <th scope="col">Fecha Inicial</th>
                <th scope="col">Fecha Final</th>
                <th scope="col">Creado Por</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($lista_servicios as $registro) {?>
            <tr class="">
                <td><?php echo $registro['idservicio'];   ?> </td>
                <td><?php echo $registro['nombre_servicio'];   ?> </td>
                <td><?php echo $registro['desc_servicio'];   ?> </td>
                <td><?php echo $registro['cost_servicio'];   ?> </td>
                <td><?php echo $registro['fech_inicio'];   ?> </td>
                <td><?php echo $registro['fech_final'];   ?> </td>
                <td><?php echo $registro['actualizado_por'];   ?> </td>
                <td>
                 
                <a
                    name=""
                    id=""
                     class=" btn btn-success bi bi-wallet2 "
                    href=""
                    role="button"
                    ></a> 
                 
                </td>
            </tr>
            <?php } ?>
            </tr>
            </tr>
            </tr>
            </tr>
        </tbody>
    </table>
   </div>
   
