<?php
   ini_set('display_errors', 1);
   include("conexion.php");    
?>
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

	<!---botones informacionales---->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- parte 1 del tuto para el captcha -->
 
 <script
	  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
	  crossorigin="anonymous"></script>
 
	<!-- Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc6EEgbAAAAAGtycCRxOfcqB3Su3bQI8LTbn7ul"></script>


	<script>
    $('#form').submit(function(event) {
        event.preventDefault();
        /*Cambia 6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS por tu clave de sitio web*/
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcZu9QUAAAAACaj-WBiVIQUlr94vfCC8DUpIanS', {action: 'registro'}).then(function(token) {
                $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#form').prepend('<input type="hidden" name="action" value="registro">');
                $('#form').unbind('submit').submit();
            });;
        });
  });
  </script>
 <!-- parte 2 del tuto para el captcha -->
 
	<?php
		
		define("RECAPTCHA_V3_SECRET_KEY", '6Lc6EEgbAAAAAGtycCRxOfcqB3Su3bQI8LTbn7ul');

		$token = $_POST['token'];
		$action = $_POST['action'];
		
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$arrResponse = json_decode($response, true);
		
		
		if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
			
			echo "ok!, eres un humano";
		} else {
			
			echo "Lo siento, parece que eres un Robot";
		}

?>
	<script type="text/javascript">
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		function onSubmit(token) {
		  document.getElementById("ingWeb").submit();
		}
	  </script>

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
						Acceso público 
					</span>
				</div>
				
				<div class="card-body">

					<script>
						(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
						})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
					  	ga('create', 'UA-67132760-1', 'auto');
						ga('send', 'pageview');
					  
					</script>
				  
				    <script type="text/javascript" language="JavaScript1.1">
					  function fococaptcha() 
					  {
						document.dgt.captchacode.select();  
						document.dgt.captchacode.focus();  
					  }
					  
					  function ventana(URL){
						window.open(URL,'','left=10,top=10,width=780,height=550,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,dependent=0,titlebar=0,fullscreen=0');
					  }
				    </script>


					<form id="ingWeb" name="dgt" method="post" action="" onsubmit="return validar_form(this);">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
											<div class="input-group mb-2">
											<div class="input-group-prepend">
											<div class="input-group-text">
											<i class="fas fa-id-card"></i></div>
											</div>
											<input type="text" tabindex="1" value="" name="Emat" class="form-control" id="matricula" placeholder="Documento N°" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Ingrese su Nº de documento SIN puntos ni letras...">
										</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text"></div>
											</div>
											<select tabindex="2" id="sexo" class="form-control" size="1" name="Esex" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Seleccione su sexo...">
												<option value=" ">Sexo</option>
												<option value="F">Femenino</option>	 						 
												<option value="M">Masculino</option>	 						 
											</select>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<div class="input-group mb-2">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fas fa-map-marker-alt"></i>  
												</div>
											</div>
											<select tabindex="3" class="form-control" value="" name="Epro" size="1" data-toggle="tooltip" data-placement="top" title="" data-delay="5" data-original-title="Seleccione la provincia que corresponde a su ultimo domicilio...">
											<option value="0">Distrito Electoral</option><option style="" value="01">Capital Federal</option><option style="" value="02">Buenos Aires</option><option style="" value="03">Catamarca</option><option style="" value="04">Córdoba</option><option style="" value="05">Corrientes</option><option style="" value="06">Chaco</option><option style="" value="07">Chubut</option><option style="" value="08">Entre Ríos</option><option style="" value="09">Formosa</option><option style="" value="10">Jujuy</option><option style="" value="11">La Pampa</option><option style="" value="12">La Rioja</option><option style="" value="13">Mendoza</option><option style="" value="14">Misiones</option><option style="" value="15">Neuquen</option><option style="" value="16">Río Negro</option><option style="" value="17">Salta</option><option style="" value="18">San Juan</option><option style="" value="19">San Luis</option><option style="" value="20">Santa Cruz</option><option style="" value="21">Santa Fe</option><option style="" value="22">Santiago del Estero</option><option style="" value="23">Tucumán</option><option style="" value="24">Tierra del Fuego</option><option style="" value="30">Argentinos en el Exterior</option> </select>  
										</div>
									</div>
								</div>
							</div>
								

							
							<div class="row">

								<div class="col-md-4 text-center">
									<div class="form-group ">
										<div class="input-group mb-2">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="fas fa-check"></i></div>
												</div>
												<input type="text" size="4" class="form-control" tabindex="4" placeholder="Código de validación" name="captchacode" value="" _data-toggle="tooltip" data-placement="right" data-delay="15" title="Indique el texto visualizado en la imagen" autocomplete="off">
										</div>
									</div>
								</div>
											
								<!-- no hace nada <div class="col-md-2"></div> -->

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
									<button class="g-recaptcha"   data-sitekey="reCAPTCHA_site_key"   data-callback='onSubmit'    data-action='submit' title="Proceder a realizar la búsqueda con los datos ingresados...">Consultar</button>
									<button type="reset" class="btn btn-outline-primary" title="Restablece los datos de búsqueda...">Restablecer</button>
								</div>
							</div>
									
					</form>

					<?php
					   if(isset($_POST['buscalo'])){
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
					   } 
					?>

					<script type="text/javascript" language="JavaScript1.1">
						document.getElementById('captcha').src = 'captcha/securimage_show.php?' + Math.random(); 
					</script>
					
					<script type="text/javascript" language="JavaScript1.1">
						document.dgt.Emat.select();  
						document.dgt.Emat.focus();  
					</script>
						
					
					<!-- VENTANAS MODALES -->
					<!-- Modal  Ayuda-->
					<div class="modal fade" id="ayudaModal" tabindex="-1" role="dialog" aria-labelledby="ayuda" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="ayuda">AYUDA PARA REALIZAR LA CONSULTA</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">×</span>
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
							  3- A continuacion seleccione el distrito (Provincia) del cual desea consultar el Padrón Electoral. Observe que puede haber provincias cuyos padrones aun no esten habilitados !!! 
							  <br>
							  4- Digite el codigo de 4 caracteres que aparece en la imagen. 
							  <br>
							  5- Por ultimo, pulse en el boton [Buscar en Padrón] para ejecutar la consulta. 
							  <br>
							  6- De encontrarse el elector/a se visualizarán los datos completos correspondientes. En caso contrario se mostrará un mensaje alusivo. 
							  <br>
							  <b>Si Ud. realizó ultimamente un cambio de domicilio desde otra provincia, intente localizars en la provincia anterior </b>
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
					
					<!-- Modal  Info-->
					<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="informacion" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="informacion">Distritos Electorales</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">×</span>
							</button>
						  </div>
						  <div class="modal-body"><div class="container-fluid">
					
						  <div class="col-md-12">
							  
					<table class="table" width="100%">
					<tbody><tr>
						<td align="CENTER"><b>Distrito</b></td>
						<td align="CENTER"><b>Domicilio</b></td>
						<td align="CENTER"><b>Horario Atención</b></td>
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
									Calle 8 e/ 50 y 51 N° 925<br> <b>(1900) La Plata</b>
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
									Córdoba		        </b></font>
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
									Entre Ríos		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Urquiza 836<br> <b>Paraná</b>
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
									Bartolomé Mitre 839<br> <b>Formosa</b>
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
									Joaquín V. Gonzalez 85<br> <b>La Rioja</b>
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
									Colón 2526<br> <b>Posadas</b>
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
									Río Negro		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									San Martin 189 1°P<br> <b>Viedma</b>
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
									Dean Funes 140 1°P<br> <b>Salta</b>
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
									Tucumán		        </b></font>
								</td>
								<td width="30%" align="left" bgcolor="#F2F0F0">  
									Las Piedras 418 1°P<br> <b>S. M. de Tucumán</b>
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
					
					<!-- Modal  Legal-->
					<div class="modal fade" id="legalModal" tabindex="-1" role="dialog" aria-labelledby="legislacion" aria-hidden="true" style="display: none;">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="legislacion">Legislación vigente</h5>
							<button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">×</span>
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
					
					
					<div style="text-align: justify;"><span style="font-weight: bold;">Artículo 12.</span>- <span style="font-weight: bold;">Deber de votar.</span> Todo elector tiene el deber de votar en la elección nacional que se realice en su distrito.<br>
					Quedan exentos de esa obligación:<br>
					a) Los jueces y sus auxiliares que por imperio de esta ley deban
					asistir a sus oficinas y mantenerlas abiertas mientras dure el acto
					comicial;<br>
					b) Los que el día de la elección se encuentren a más de quinientos
					(500) kilómetros del lugar donde deban votar y justifiquen que el
					alejamiento obedece a motivos razonables.<br>
					Tales electores se presentarán el día de la elección a la autoridad
					policial más próxima, la que extenderá certificación escrita que
					acredite la comparecencia;<br>
					c) Los enfermos o imposibilitados por fuerza mayor, suficientemente
					comprobada, que les impida asistir al acto. Estas causales deberán ser
					justificadas en primer término por médicos del servicio de sanidad
					nacional; en su defecto por médicos oficiales, provinciales o
					municipales, y en ausencia de éstos por médicos particulares.<br>
					Los profesionales oficiales de referencia estarán obligados a
					responder, el día del comicio, al requerimiento del elector enfermo o
					imposibilitado, debiendo concurrir a su domicilio para verificar esas
					circunstancias y hacerle entrega del certificado correspondiente;<br>
					d) El personal de organismos y empresas de servicios públicos que por
					razones atinentes a su cumplimiento deban realizar tareas que le
					impidan asistir al comicio durante su desarrollo. En ese caso el
					empleador o su representante legal comunicarán al Ministerio del
					Interior y Transporte la nómina respectiva con diez (10) días de
					anticipación a la fecha de la elección, expidiendo, por separado, la
					pertinente certificación.<br>
					La falsedad en las certificaciones aquí previstas hará pasible a los
					que la hubiesen otorgado de las penas establecidas en el artículo 292
					del Código Penal. Las exenciones que consagra este artículo son de
					carácter optativo para el elector.<br>
					<br>
					<span style="font-weight: bold;">Artículo 18.- Registro de infractores al deber de votar</span>.
					La Cámara Nacional Electoral llevará un registro de infractores al
					deber de votar establecido en el artículo 12. Luego de cada elección
					nacional, elaborará un listado por distrito, con nombre, apellido y
					matrícula de los electores mayores de dieciocho (18) años y menores de
					setenta (70) años de edad de quienes no se tenga constancia de emisión
					del voto, el que pondrá en conocimiento del Poder Ejecutivo. Los
					gobiernos provinciales y de la Ciudad Autónoma de Buenos Aires podrán
					solicitar a la Cámara el listado correspondiente a los electores de su
					distrito.<br>
					<br>
					<span style="font-weight: bold;">Artículo 125.- No emisión del voto</span>.
					Se impondrá multa de pesos cincuenta ($ 50) a pesos quinientos ($ 500)
					al elector mayor de dieciocho (18) años y menor de setenta (70) años de
					edad que dejare de emitir su voto y no se justificare ante la justicia
					nacional electoral dentro de los sesenta (60) días de la respectiva
					elección.<br>
					Cuando se acreditare la no emisión por alguna de las causales que prevé
					el artículo 12, se entregará una constancia al efecto. El infractor
					incluido en el Registro de infractores al deber de votar establecido en
					el artículo 18 no podrá ser designado para desempeñar funciones o
					empleos públicos durante tres (3) años a partir de la elección. El juez
					electoral de distrito, si no fuere el del domicilio del infractor a la
					fecha prevista en el artículo 25, comunicará la justificación o pago de
					la multa al juez electoral donde se encontraba inscripto el elector.<br>
					Será causa suficiente para la aplicación de la multa, la constatación
					objetiva de la omisión no justificada. Los procesos y las resoluciones
					judiciales que se originen respecto de los electores que no consientan
					la aplicación de la multa, podrán comprender a un infractor o a un
					grupo de infractores. Las resoluciones serán apelables ante la alzada
					de la justicia nacional electoral.<br>
					(Artículo sustituido por art. 6° de la Ley 26.744 B.O. 11/06/2012 y modificado por art. 3° de la Ley N° 26.774 B.O.<br>
					02/11/2012)<br>
					<br>
					<span style="font-weight: bold;">Artículo 126.- Pago de la multa.</span> El pago de la multa se acreditará mediante una constancia expedida por el juez electoral, el secretario o el juez de paz.<br>
					El infractor que no la oblare no podrá realizar gestiones o trámites
					durante un (1) año ante los organismos estatales nacionales,
					provinciales, de la Ciudad Autónoma de Buenos Aires o municipales. Este
					plazo comenzará a correr a partir del vencimiento de sesenta (60) días
					establecido en el primer párrafo del artículo 125.<br>
					
					
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







					<!-- PIE -->					
					<div class="card-footer cne-pie-bg"> 
						<div class="row">
							(c) 2007-2018 - Poder Judicial de la Nación - Cámara Nacional Electoral						
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
