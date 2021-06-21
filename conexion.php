<?php
function conectar(){
   $srvr = "localhost";
   $user = "root";
   $pswd = "";
   $bd = "infractores";
   $port = 3306;
   $con = new mysqli($srvr, $user, $pswd, $bd,$port) or die("Error de conexion:".mysql_connect_error()); 
   return $con;
}
?>


