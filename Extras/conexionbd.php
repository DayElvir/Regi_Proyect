<?php  
    
        $conexion =mysqli_connect("localhost", "root","20191003101", "bd_regi");   
   
        if($conexion){     
        echo'conectado a la base de datos exito';             
      }else{      
        echo 'no se pudo hacer la conexion';    
    }
    
?>