<?php
include"conexionbd.php";
$sentencia=$conexion->prepare("SELECT * FROM `servicios`" );
$sentencia->execute();
$lista_servicios=$sentencia-> fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Regi_interfaces/assent/css/interfaces.css" >
</head>

<body>

<section class="inicio" id="inicio" >
<div class="contenedor">

    <div class="card-header">
    <a name="" id="" class="btn btn-primary "  href="index.php"role="button">Agregar/Editar </a>
    </div>

    <div class="card-body">
   <div class="table-responsive-sm">
    <table class="tabla">
        <thead>
            <tr>
                <th scope="col">ID</th>
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
            <tr class="table">
                <td><?php echo $registro['idservicio'];   ?> </td>
                <td><?php echo $registro['nombre_servicio'];   ?> </td>
                <td><?php echo $registro['desc_servicio'];   ?> </td>
                <td><?php echo $registro['cost_servicio'];   ?> </td>
                <td><?php echo $registro['fech_inicio'];   ?> </td>
                <td><?php echo $registro['fech_final'];   ?> </td>
                <td><?php echo $registro['actualizado_por'];   ?> </td>
                <td>
                  <a name="" id="" class= "btn btn-success bi bi-trash3"
                    href="http://localhost/Regi_interfaces/servicios/pagos.php"
                    role="button">Pagar Servicio</a>
                </td>
            </tr>
            <?php } ?>
            </tr>
        </tbody>
    </table>
   </div>
    </div>
</div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   </body>
</html>