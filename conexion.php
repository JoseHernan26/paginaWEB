<?php
function conectar(){
   $srvr = "127.0.0.1";
   $user = "root";
   $pswd = "";
   $bd = "infractores";
   $con = new mysqli($srvr, $user, $pswd, $bd) or die("Error de conexion:" . mysql_connect_error()); 
   return $con;
}

 
?>


