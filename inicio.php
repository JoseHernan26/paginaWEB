<!DOCTYPE html>
<html  xml:lang="es" lang="es-es">
<head>
	<title></title>

	
	<title>Justicia Nacional Electoral - REGISTRO DE INFRACTORES</title>
	<meta http-equiv="Cache-Control" content="max-age=31536000">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="Keywords" content="padron,padrones,mesas,consulta,elecciones,interna,argentina">
	<meta name="Subject" content="Consulta Padron Electoral">
	<meta name="Language" content="es">
	<meta name="Robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	
	<link rel="stylesheet" type="text/css" href="css/sec.css">
	<link rel="stylesheet" type="text/css" href="css/principal.css">

	<!---botones informacionales-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- parte 1 del tuto para el captcha -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
 
	<!-- Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web -->
        <script src="https://www.google.com/recaptcha/api.js?render=6Lc6EEgbAAAAAGtycCRxOfcqB3Su3bQI8LTbn7ul"></script>



</head>

<body>

	<div class="container-fluid">
      <div class="row justify-content-center">
	 <div class="col-md-8">

<div class="row" style="margin-bottom:10px;">
	<div class="col-lg-9 col-md-6 col-sm-6 text-lg-left text-md-left text-sm-left text-center">
		<img alt="Logo CNE" src="imagenes/registro_infractores.png" height="60">
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6 text-lg-right text-md-right text-sm-right text-center">
		<img alt="Logo CNE" src="imagenes/logo_cne.jpg" height="60">
	</div>
</div>



<div class="row">
		<div class="col align-self-start">
			<!-- Agrego el nuevo componente  -->
			<div class="card shadow rounded "> 
				<div class="card-header text-center cne-cabecera-bg"> 
				<!-- Cabecera Aplicacion -->
					<span class="cabecera-titulo">
						REGISTRO DE INFRACTORES AL DEBER DE VOTAR
					</span>
					<br>
					<span class="cabecera-subtitulo">
						Acceso p??blico 
					</span>
				</div>
				
				<div class="card-body">
					<form id="ingWeb" name="dgt" method="post" action="inicio.php" action="listado.php"  >
						<!--  sacamos onsubmit="return validar_form(this);" al lado de actiion  -->
							<div class="row">
							
								
								<div class="col-md-4 text-center">
									<div class="form-group ">
										<div class="input-group mb-2">
										    <div class="input-group-prepend">
												<div class="input-group-text"> 
													<img src="imagenes/DNI_50.png"  width="20" height="20">		
												</div>
													<input type="text" tabindex="1" value="" name="Emat" class="form-control" id="matricula" placeholder="Documento N??" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Ingrese su N?? de documento SIN puntos ni letras...">
										
											</div>
										</div>	
									</div>
								</div>
								<div class="col-md-4 text-center">
									<div class="form-group ">
										<div class="input-group mb-2">
										    <div class="input-group-prepend">
												<div class="input-group-text">  
													<img src="imagenes/persona_50.png"  width="20" height="20">						
												</div>
												
													<select tabindex="2" id="sexo" class="form-control" size="1" name="Esex" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Seleccione su sexo...">
																<option value=" ">Sexo</option>
																<option value="F">Femenino</option>	 						 
																<option value="M">Masculino</option>	 						 
													</select>
											</div>
										</div>	
									</div>
								</div>

								<div class="col-md-4 text-center">
									<div class="form-group ">
										<div class="input-group mb-2">
										    <div class="input-group-prepend">
												<div class="input-group-text">

												<img src="imagenes/ubicacion_50.png"  width="20" height="20">											
												</div>
												<select tabindex="3" class="form-control" value="" name="Epro" size="1" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Seleccione la provincia que corresponde a su ultimo domicilio...">
												<option value="0">Distrito Electoral</option><option style="" value="01">Capital Federal</option><option style="" value="02">Buenos Aires</option><option style="" value="03">Catamarca</option><option style="" value="04">C??rdoba</option><option style="" value="05">Corrientes</option><option style="" value="06">Chaco</option><option style="" value="07">Chubut</option><option style="" value="08">Entre R??os</option><option style="" value="09">Formosa</option><option style="" value="10">Jujuy</option><option style="" value="11">La Pampa</option><option style="" value="12">La Rioja</option><option style="" value="13">Mendoza</option><option style="" value="14">Misiones</option><option style="" value="15">Neuquen</option><option style="" value="16">R??o Negro</option><option style="" value="17">Salta</option><option style="" value="18">San Juan</option><option style="" value="19">San Luis</option><option style="" value="20">Santa Cruz</option><option style="" value="21">Santa Fe</option><option style="" value="22">Santiago del Estero</option><option style="" value="23">Tucum??n</option><option style="" value="24">Tierra del Fuego</option><option style="" value="30">Argentinos en el Exterior</option> </select>	
										
											</div>
										</div>	
									</div>
								</div>
								
							</div> <!-- CIERRA EL ROW-->
								

							
							<div class="row">
								
								<div class="col-md-2"></div>

								<div class="col-md-3 text-center">
										<button type="button" name="ayuda" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#ayudaModal"><img src="imagenes/amarillo_50.png" width="22" height="22">	<i class="fas fa-question-circle" style="color:#fff"></i> </button>
										&nbsp; 
										<button type="button" name="info" class="btn btn-sm btn-info" data-toggle="modal" data-target="#infoModal">	<img src="imagenes/Informacion_50.png" width="20" height="20">	<i class="fas fa-info-circle"></i></button>
										&nbsp; 
										<button type="button" name="legal" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#legalModal">	<img src="imagenes/balanza_50.png" width="20" height="20"><i class="fas fa-balance-scale"></i></button>
								</div>
							</div>
				
							<br>
								
							
							<div class="row">
								<div class="col-md-12 text-center">
									&nbsp; &nbsp; &nbsp;
									<input type="submit" value="Consultar" tabindex="5" name="Bbus" class="btn btn-primary" title="Proceder a realizar la b??squeda con los datos ingresados...">
									&nbsp; &nbsp; &nbsp;
									<button type="reset" class="btn btn-outline-primary" title="Restablece los datos de b??squeda...">Restablecer</button>
								</div>
							</div>
									
					</form>
<script>
    $('#ingWeb').submit(function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lc6EEgbAAAAAGtycCRxOfcqB3Su3bQI8LTbn7ul', {action: 'registro'}).then(function(token) {
                $('#ingWeb').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#ingWeb').prepend('<input type="hidden" name="action" value="registro">');
                $('#ingWeb').unbind('submit').submit();
            });;
        });
  });
  </script>
 <?php
	include("conexion.php");
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
			$arr=buscar($dni,$sexo,$prov);		
			if($arr != null){			
				echo"<script> location.replace('listado.php?dni=".$dni."& nombre=".$arr[1]."& apellido=".$arr[2]."& sexo=".$sexo."& provincia=".$prov."'); </script>";
				exit();
			}
		}
		else {			
			echo "Lo siento, parece que eres un Robot";
		}

	}

?>

					<div class="modal fade" id="ayudaModal" tabindex="-1" role="dialog" aria-labelledby="ayuda" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="ayuda">AYUDA PARA REALIZAR LA CONSULTA</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">??</span>
							</button>
						  </div>
						  <div class="modal-body">
							<table>
						<tbody><tr>
						  <td>
							  <br>
							  1- Ingrese su Nro de documento (DNI, LC, LE, etc) sin puntos ni letras.
							  <br>
							  2- Luego seleccione el sexo (Femenino o Masculino)
							  <br>
							  3- A continuacion seleccione el distrito (Provincia) del cual desea consultar el Padr??n Electoral. Observe que puede haber provincias cuyos padrones aun no esten habilitados !!! 
							  <br>
							  4- Digite el codigo de 4 caracteres que aparece en la imagen. 
							  <br>
							  5- Por ultimo, pulse en el boton [Buscar en Padr??n] para ejecutar la consulta. 
							  <br>
							  6- De encontrarse el elector/a se visualizar??n los datos completos correspondientes. En caso contrario se mostrar?? un mensaje alusivo. 
							  <br>
							  <b>Si Ud. realiz?? ultimamente un cambio de domicilio desde otra provincia, intente localizars en la provincia anterior </b>
							  <br>
							  7- Si lo desea, puede imprimir una constancia, haciendo click en el boton "Imprimir". 
							</td>
						</tr>
					</tbody></table>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						  </div>
						</div>
					  </div>
					</div>
					<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="informacion" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="informacion">Distritos Electorales</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">??</span>
							</button>
						  </div>
						  <div class="modal-body"><div class="container-fluid">
					
						  <div class="col-md-12">
							  
					<table class="table" width="100%">
					<tbody><tr>
						<td align="CENTER"><b>Distrito</b></td>
						<td align="CENTER"><b>Domicilio</b></td>
						<td align="CENTER"><b>Horario Atenci??n</b></td>
					</tr>
					
							<tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Capital Federal		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Tucuman 1320<br> <b>Capital Federal</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7:30 a 13:30	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Buenos Aires		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Calle 8 e/ 50 y 51 N?? 925<br> <b>(1900) La Plata</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V de 7.30 a 16.00 hs.	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Catamarca		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Republica 323<br> <b>Catamarca</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									C??rdoba		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Concepcion Arenal 690<br> <b>Cordoba</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Corrientes		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									25 de Mayo 972<br> <b>Corrientes</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Chaco		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Juan D. Peron 650<br> <b>Resistencia</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7:00 a 13:00	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Chubut		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									9 de Julio 99<br> <b>Rawson</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Entre R??os		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Urquiza 836<br> <b>Paran??</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Formosa		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Bartolom?? Mitre 839<br> <b>Formosa</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Jujuy		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									San Martin 1196<br> <b>San Salvador de Jujuy</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									La Pampa		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Av. J.A.Roca 153<br> <b>Santa Rosa</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7:30 a 13:30	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									La Rioja		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Joaqu??n V. Gonzalez 85<br> <b>La Rioja</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Mendoza		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Av. Colon y Av. San Martin, 4to piso<br> <b>Mendoza</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7:30 a 13:30	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Misiones		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Col??n 2526<br> <b>Posadas</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 12 	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Neuquen		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Santa Fe 318<br> <b>Neuquen</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									R??o Negro		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									San Martin 189 1??P<br> <b>Viedma</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Salta		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Dean Funes 140 1??P<br> <b>Salta</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									San Juan		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Mitre 330 (Este)<br> <b>San Juan</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									San Luis		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									<br> <b>San Luis</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Santa Cruz		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Pellegrini 106<br> <b>Rio Gallegos</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 16	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Santa Fe		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Urquiza 3046/48<br> <b>Santa Fe</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13 	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Santiago del Estero		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Av. Belgrano (N) 515<br> <b>Stgo. del Estero</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Tucum??n		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Las Piedras 418 1??P<br> <b>S. M. de Tucum??n</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Tierra del Fuego		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Goleta Florencia 1686<br> <b>Ushuaia</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
									L a V - 7 a 13	        </td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#48D85C" width="25%" align="left">
									<font size="2.5"><b>
									Argentinos en el Exterior		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									25 de mayo 245 (C1002ABE)<br> <b>Ciudad Aut. de Buenos Aires</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
												</td>
						   </tr>
					
						   
								   <tr border="2">
								<td border="2" bgcolor="#FA6B44" width="25%" align="left">
									<font size="2.5"><b>
									CAMARA NACIONAL ELECTORAL		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									25 de mayo 245 (C1002ABE)<br> <b>Ciudad Aut. de Buenos Aires</b>
								</td>
								<td width="20%" align="center" bgcolor="#F2F0F0">
												</td>
						   </tr>
					
						   
						   
					</tbody></table>
					
						  </div>
						  
						</div>
					   </div>
					   <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					   </div>
					   </div>
					  </div>
					</div>
					
					<div class="modal fade" id="legalModal" tabindex="-1" role="dialog" aria-labelledby="legislacion" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="legislacion">Legislaci??n vigente</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">??</span>
							</button>
						  </div>
						  <div class="modal-body"><div class="container-fluid">
					
						  <div class="col-md-12">
							  
					<div style="text-align: center; font-weight: bold;"><big>CODIGO ELECTORAL NACIONAL<br>
					</big></div>
					<br>
					<center>
					<table class="table">
					<tbody><tr>
					<td align="center">
					<div style="text-align: justify;"><span style="font-weight: bold;">Art??culo 12.</span>- <span style="font-weight: bold;">Deber de votar.</span> Todo elector tiene el deber de votar en la elecci??n nacional que se realice en su distrito.<br>
					Quedan exentos de esa obligaci??n:<br>
					a) Los jueces y sus auxiliares que por imperio de esta ley deban
					asistir a sus oficinas y mantenerlas abiertas mientras dure el acto
					comicial;<br>
					b) Los que el d??a de la elecci??n se encuentren a m??s de quinientos
					(500) kil??metros del lugar donde deban votar y justifiquen que el
					alejamiento obedece a motivos razonables.<br>
					Tales electores se presentar??n el d??a de la elecci??n a la autoridad
					policial m??s pr??xima, la que extender?? certificaci??n escrita que
					acredite la comparecencia;<br>
					c) Los enfermos o imposibilitados por fuerza mayor, suficientemente
					comprobada, que les impida asistir al acto. Estas causales deber??n ser
					justificadas en primer t??rmino por m??dicos del servicio de sanidad
					nacional; en su defecto por m??dicos oficiales, provinciales o
					municipales, y en ausencia de ??stos por m??dicos particulares.<br>
					Los profesionales oficiales de referencia estar??n obligados a
					responder, el d??a del comicio, al requerimiento del elector enfermo o
					imposibilitado, debiendo concurrir a su domicilio para verificar esas
					circunstancias y hacerle entrega del certificado correspondiente;<br>
					d) El personal de organismos y empresas de servicios p??blicos que por
					razones atinentes a su cumplimiento deban realizar tareas que le
					impidan asistir al comicio durante su desarrollo. En ese caso el
					empleador o su representante legal comunicar??n al Ministerio del
					Interior y Transporte la n??mina respectiva con diez (10) d??as de
					anticipaci??n a la fecha de la elecci??n, expidiendo, por separado, la
					pertinente certificaci??n.<br>
					La falsedad en las certificaciones aqu?? previstas har?? pasible a los
					que la hubiesen otorgado de las penas establecidas en el art??culo 292
					del C??digo Penal. Las exenciones que consagra este art??culo son de
					car??cter optativo para el elector.<br>
					<br>
					<span style="font-weight: bold;">Art??culo 18.- Registro de infractores al deber de votar</span>.
					La C??mara Nacional Electoral llevar?? un registro de infractores al
					deber de votar establecido en el art??culo 12. Luego de cada elecci??n
					nacional, elaborar?? un listado por distrito, con nombre, apellido y
					matr??cula de los electores mayores de dieciocho (18) a??os y menores de
					setenta (70) a??os de edad de quienes no se tenga constancia de emisi??n
					del voto, el que pondr?? en conocimiento del Poder Ejecutivo. Los
					gobiernos provinciales y de la Ciudad Aut??noma de Buenos Aires podr??n
					solicitar a la C??mara el listado correspondiente a los electores de su
					distrito.<br>
					<br>
					<span style="font-weight: bold;">Art??culo 125.- No emisi??n del voto</span>.
					Se impondr?? multa de pesos cincuenta ($ 50) a pesos quinientos ($ 500)
					al elector mayor de dieciocho (18) a??os y menor de setenta (70) a??os de
					edad que dejare de emitir su voto y no se justificare ante la justicia
					nacional electoral dentro de los sesenta (60) d??as de la respectiva
					elecci??n.<br>
					Cuando se acreditare la no emisi??n por alguna de las causales que prev??
					el art??culo 12, se entregar?? una constancia al efecto. El infractor
					incluido en el Registro de infractores al deber de votar establecido en
					el art??culo 18 no podr?? ser designado para desempe??ar funciones o
					empleos p??blicos durante tres (3) a??os a partir de la elecci??n. El juez
					electoral de distrito, si no fuere el del domicilio del infractor a la
					fecha prevista en el art??culo 25, comunicar?? la justificaci??n o pago de
					la multa al juez electoral donde se encontraba inscripto el elector.<br>
					Ser?? causa suficiente para la aplicaci??n de la multa, la constataci??n
					objetiva de la omisi??n no justificada. Los procesos y las resoluciones
					judiciales que se originen respecto de los electores que no consientan
					la aplicaci??n de la multa, podr??n comprender a un infractor o a un
					grupo de infractores. Las resoluciones ser??n apelables ante la alzada
					de la justicia nacional electoral.<br>
					(Art??culo sustituido por art. 6?? de la Ley 26.744 B.O. 11/06/2012 y modificado por art. 3?? de la Ley N?? 26.774 B.O.<br>
					02/11/2012)<br>
					<br>
					<span style="font-weight: bold;">Art??culo 126.- Pago de la multa.</span> El pago de la multa se acreditar?? mediante una constancia expedida por el juez electoral, el secretario o el juez de paz.<br>
					El infractor que no la oblare no podr?? realizar gestiones o tr??mites
					durante un (1) a??o ante los organismos estatales nacionales,
					provinciales, de la Ciudad Aut??noma de Buenos Aires o municipales. Este
					plazo comenzar?? a correr a partir del vencimiento de sesenta (60) d??as
					establecido en el primer p??rrafo del art??culo 125.<br>
					</div>
					</td></tr></tbody></table>
						  </center></div>
						</div>
					   </div>
					   <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					   </div>
					   </div>
					  </div>
					</div>
					<script type="text/javascript">
					$('#ayudaModal').on('shown.bs.modal', function () {
					$('#myInput').trigger('focus')
					})
					
					$('#infoModal').on('shown.bs.modal', function () {
					$('#myInput').trigger('focus')
					})
					
					$('#legalModal').on('shown.bs.modal', function () {
					$('#myInput').trigger('focus')
					})
					</script>	
					<div class="card-footer cne-pie-bg"> 
						<div class="row">
							(c) 2007-2018 - Poder Judicial de la Naci??n - C??mara Nacional Electoral						
						</div>
					</div>


				</div>
			</div>
		</div>	
</div>				
</div>
</div>
</div>
</body>
</html>
