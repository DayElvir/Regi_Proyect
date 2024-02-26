<?php
  $servidor="localhost";
  $basededatos="bd_regi";
  $usuario= "root";
  $contrasena= "20191003101";
  
  
  try { 
  
    $conexion =new PDO( "mysql: host=$servidor;
    dbname=$basededatos",$usuario,$contrasena ); 
  

  } catch (Exception $error) {
  
    echo  $error->getMessage();
  }



