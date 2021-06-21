<?php
   ini_set('display_errors', 1);
   include("conexion.php");    
?>

<!-- parte 2 del tuto para el captcha -->
 
<?php
		
		define("RECAPTCHA_V3_SECRET_KEY", '6Lc6EEgbAAAAAGtycCRxOfcqB3Su3bQI8LTbn7ul');

		$token = $_POST['token'];
		$action = $_POST['action'];
        if(function_exists('curl_init') === false){
            //curl_init is not defined
            //cURL not enabled
            echo "cURL not enabled";
        }

		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);
		
		
		if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.2) {
			
			echo "ok!, eres un humano";
            $con = conectar();
            $dni = $_POST['Emat'];
            $sexo = $_POST['Esex'];
            $prov = $_POST['Epro'];
            $resul = mysqli_query($con,"SELECT * FROM Personas WHERE P_Dni=$dni AND P_Sexo='$sexo'");
            $resul = mysqli_fetch_array($resul);
            if($resul != FALSE){
           $msj = "Nombre: ".$resul['P_Nombre']." ".$resul['P_Apellido'];
            
           echo '<script>alert("'.$msj.'")</script>';
            }
            else{
           echo '<script>alert("NO SE ENCUENTRA REGISTRADO!")</script>';
            } 
		} else {
			
			echo "Lo siento, parece que eres un Robot";
		}

?>
