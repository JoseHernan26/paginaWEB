
<?php


	function conexion_bd($auxiliar){
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$bd="data-base-inge-web";
		// Create connection
		$conexion = new mysqli($servername, $username, $password,$bd);

		// Check connection
		if (!$conexion) {
			$auxiliar=false;
			die("Error de conexion:" . mysql_connect_error());
		}
		return $conexion;
	}

?>


