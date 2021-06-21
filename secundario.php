<?php
   ini_set('display_errors', 1);
   include("conexion.php");
   define("RECAPTCHA_V3_SECRET_KEY", '6Lc6EEgbAAAAABCiOdMLbrC81IIsoCGcr6poEg6s');
   $token = $_POST['token'];
   $action = $_POST['action'];
   if(function_exists('curl_init') === false){
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
   if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
      $dni = $_POST['Emat'];
      $sexo = $_POST['Esex'];
      $prov = $_POST['Epro'];
      buscar($dni,$sexo,$prov);
   }
   else {			
      echo "Lo siento, parece que eres un Robot";
   }
?>
