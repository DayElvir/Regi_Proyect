<?php
include("./conexionbd.php");

//include("navbar/navbar.php");
$modulos= isset($_GET["p"]) ? strtolower($_GET["p"]) :'inicio';
 
require_once('templanes/Navbar.php');




