<?php
include("./conexionbd.php");


//include("navbar/navbar.php");
$modulos= isset($_GET["p"]) ? strtolower($_GET["p"]) :'inicio';
 
require_once('servicios/Navbar.php');


require_once ('servicios/' . $modulos . '.php');

