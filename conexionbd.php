<?php
  $servidor="localhost";
  $database="bd_regi";
  $usuario= "root";
  $contrasena= "20191003101";
  
  
  try { 
  
    $conexion =new PDO("mysql:host= $servidor; 
    dbname= $database",$usuario , $contrasena ); 

      echo"conexion realizada....";

  } catch (Exception $error) {
  
    echo  $error->getMessage() ."";
  }




?>