<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Listado de sufragios</title>
<meta http-equiv="Cache-Control" content="max-age=31536000">

<meta name="Keywords" content="padron,padrones,mesas,consulta,elecciones,interna,argentina">
<meta name="Description" content="Pagina dedicada al servicio de consulta del Registro Nacional de Electores de Argentina">
<meta name="Author" content="PJN-Direccion Gral. de Tecnologia - DDB">
<meta name="Subject" content="Consulta Padron Electoral">
<meta name="Language" content="es">
<meta name="Robots" content="index, follow">
<meta name="Copyright" content="2003/2013 - Poder Judicial de la Nacion">
<meta name="reply-to" content="webmaster@pjn.gov.ar">
<meta name="identifier-url" content="www.pjn.gov.ar">
<meta name="rating" content="General">
<meta name="revisit-after" content="10 days">
<meta name="distribution" content="global">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="google-site-verification" content="VUTuQBp9NrCEFHw96MQfMMdmhTu26t7J3Ab9xdRXPO0">

<link rel="shortcut icon" href="https://infractores.padron.gob.ar/cne_comun/favicon.png">

<!-- MODAL --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- FIN MODAL --->
<!-- FORMULARIO --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- FIN FORMULARIO--->
<!-- Letras --->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- BOTONES --->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<script async="" type="text/javascript" src="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/jquery-3.3.1.slim.min.js.descarga"></script>
<script async="" type="text/javascript" src="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/popper.min.js.descarga"></script>
<script async="" type="text/javascript" src="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/bootstrap.min.js.descarga"></script>

<link rel="stylesheet" href="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/cne_css.css">

<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>

</head>

<body _oncontextmenu="return false">
 
<?php
/*
 VAS A TENER QUE DESCOMENTAR PARA QUE TE ANDE LA NAVEGACION DESDE EL INICIO HASTA LISTADO

include("conexion.php");
 	$dni=$_GET['dni'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
	$sexo=$_GET['sexo'];
	$provincia=$_GET['provincia'];


	
	LLAMA A LISTAR!
    listar($dni,$sexo,$provincia);
*/


$nombre="vv";
$apellido="bb";
$dni=14;
?>


	<div class="container-fluid">

		<div class="row justify-content-center">
		<!-- <div class="col-md-2">
		</div> -->
		<div class="col-md-8">

			<!-- Cabecera General-->
			<!--  comienzo cabecera -->
<div class="row" style="margin-bottom:10px;">
	<div class="col-lg-9 col-md-6 col-sm-6 text-lg-left text-md-left text-sm-left text-center">
		<img alt="Logo CNE" src="imagenes/registro_infractores.png" height="60">
	</div>

	<div class="col-lg-3 col-md-6 col-sm-6 text-lg-right text-md-right text-sm-right text-center">
		<img alt="Logo CNE" src="imagenes/logo_cne.jpg" height="60">
	</div>
</div>

<!--  fin cabecera -->			
<!--  comienzo cuerpo-->
			<div class="row">
				<div class="col align-self-start">
					<!-- Agrego el nuevo componente  -->
					<div class="card shadow rounded "> 
						<div class="card-header text-center cne-cabecera-bg"> <!-- Cabecera Aplicacion -->
							<span class="cne-cabecera-titulo">
								REGISTRO DE INFRACTORES AL DEBER DE VOTAR							</span>
							<br>
							<span class="cne-cabecera-subtitulo">
								Acceso público 							</span>
						</div>
						
					<div class="card-body"> 
<!-- Cuerpo Aplicacion -->						




<link rel="stylesheet" type="text/css" href="./Justicia Nacional Electoral - REGISTRO DE INFRACTORES_files/jquery.fancybox.css">


	
<div class="alert alert-warning text-center shadow" role="alert">
	<div class="row align-items-center">
			<div class="col-md-12 text-center align-middle">
			  		<img src="imagenes/Error_50.png" height=25px width=25px><br>
					<b>
			  		<b>
					Recuerde que la condición de [NO INFRACTOR] no implica que el elector haya emitido su sufragio. 
				    </b>
					</b>
			</div>
	</div>
	<br>
</div>

	

<div class="alert alert-primary text-center shadow" role="alert">
	<div class="row align-items-center">
			<div class="col-md-4 text-center align-middle">
					Matrícula Nº 	
					<h2> <?php echo$dni;   ?></h2>
			</div>
			<div class="col-md-8 text-center align-middle">
			  		Apellido y nombres 			  		
					<h2> <?php echo" ".$apellido." , ".$nombre;   ?></h2>
			</div>
	</div>
</div>

	
<!--	 LISTADO DE SUFRAGIOS  --->	



<!-------- XXXXXXXXXXXX    --------->

<?php


function f_provincia($prov){
	switch($prov){
		case "01": $distrito="CAPITAL FEDERAL"; break;
		case "02": $distrito="BUENOS AIRES"; break;
		case "03": $distrito="CATAMARCA"; break;
		case "04": $distrito="CORDOBA"; break;
		case "05": $distrito="CORRIENTES"; break;
		case "06": $distrito="CHACO"; break;
		case "07": $distrito="CHUBUT"; break;
		case "08": $distrito="ENTRE RIOS"; break;
		case "09": $distrito="FORMOSA"; break;
		case "10": $distrito="JUJUY"; break;
		case "11": $distrito="LA PAMPA"; break;
		case "12": $distrito="LA RIOJA"; break;
		case "13": $distrito="MENDOZA"; break;
		case "14": $distrito="MISIONES"; break; 
		case "15": $distrito="NEUQUEN"; break;
		case "16": $distrito="RIO NEGRO"; break;
		case "17": $distrito="SALTA"; break;
		case "18": $distrito="SAN JUAN"; break;
		case "19": $distrito="SAN LUIS"; break;
		case "20": $distrito="SANTA CRUZ"; break;
		case "21": $distrito="SANTA FE"; break; 
		case "22": $distrito="SANTIAGO DEL ESTERO"; break;
		case "23": $distrito="TUCUMAN"; break;
		case "24": $distrito="TIERRA DEL FUEGO"; break;
		case "30": $distrito="ARGENTINOS EN EL EXTERIOR"; break;
	}
	return $distrito;
}


function f_infractor($posicion){
	if($posicion=="Sin Deuda"){
		$rta='		
		<div class="col-md-6 text-center align-middle">
			<i class="fas fa-check-circle fa-3x" style="color:#008000;"></i>
			<h2> UD. NO ES INFRACTOR </h2>								
		</div>
		<div class="col-md-4 text-right" style="vertical-align:middle;">
			<span>
				<a class="btn btn-sm btn-outline-success btn-block" data-caption="Imprimir constancia" data-fancybox="" data-type="iframe" data-src="constancia_noinfractor.php?x_cue=GD00126449204" href="javascript:;">
					Imprimir constancia
				</a>
			</span>
		</div>';
	
	}else{
		$rta='
		<div class="col-md-6 text-center align-middle">
								
			<i class="fas fa-exclamation-circle fa-3x" style="color:red;"></i>
			<h2> EL ELECTOR NO HA VOTADO EN LA ELECCIÓN INDICADA</h2>
			<small>
				Según los datos obrantes en la Justicia Nacional Electoral, Ud. no ha emitido su voto en la eleccion indicada. Para regularizar su situación, puede abonar la multa prevista por el Código Electoral Nacional (art.125).								
			</small>
						
		</div>
		<div class="col-md-4 text-right" style="vertical-align:middle;">
			<span>
						
				<button type="button"  class="btn btn-outline-danger" data-toggle="modal" data-target="#Boleta_de_pago_multa">
						Boleta de pago multa
				</button>
				<br><br>
				<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Reclamar_multa_abonada">
						Reclamar multa abonada
				</button>
				<br><br>
				<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#Reclamar">
						Reclamar
				</button>


			</span>
		</div>
		';
	}
	return $rta;

}







$arr = array (    /// fecha // tipo // districto //  deuda
			array(2019-10-27,"tipo general","2","No Pagada"),
			array(2019-8-2,"tipo general","2","No Pagada"),
			array(2013-10-27,"tipo general","2","Sin Deuda"),
			array(2014-10-1,"tipo general","2","Sin Deuda"),
  		);

listar_mesas($nombre ,$apellido , $dni , $arr );


// $fecha = explode(":", $datos);
function  listar_mesas($nombre ,$apellido , $dni , $arr ){
	$cant= count($arr);
	$posiciones=array(False,False,False,False,False,False,False,False,False); //9 posiciones
	for( $i=0 ;$i<$cant;$i++){
		$posiciones[$i]=True;
	}
	//$fecha=explode("-",$arr[0][0])
    
	//  0
	if($posiciones[0]==True){
		$fecha=explode("-",$arr[0][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[0][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[0][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[0][3]).'
						

				</div>
			</div>';
			
	}

	//  1
	if($posiciones[1]==True){
		$fecha1=explode("-",$arr[1][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha1[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha1[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[1][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[1][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[1][3]).'
						

				</div>
			</div>';
			
	}

	//2
	if($posiciones[2]==True){
		$fecha2=explode("-",$arr[2][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha2[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha2[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[2][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[2][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[2][3]).'
						

				</div>
			</div>';
			
	}


	// 3
	if($posiciones[3]==True){
		$fecha3=explode("-",$arr[3][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha3[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha3[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[3][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[3][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[3][3]).'
						

				</div>
			</div>';
			
	}


	//  4
	if($posiciones[4]==True){
		$fecha4=explode("-",$arr[4][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha4[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha4[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[4][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[4][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[4][3]).'
						

				</div>
			</div>';
			
	}


	// 5
	if($posiciones[5]==True){
		$fecha5=explode("-",$arr[5][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha5[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha5[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[5][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[5][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[5][3]).'
						

				</div>
			</div>';
			
	}


	//   6 
	if($posiciones[6]==True){
		$fecha6=explode("-",$arr[6][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha6[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha6[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[6][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[6][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[6][3]).'
						

				</div>
			</div>';
			
	}

	// 7
	if($posiciones[7]==True){
		$fecha7=explode("-",$arr[7][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha7[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha7[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[7][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[7][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[7][3]).'
						

				</div>
			</div>';
			
	}


	// 8
	if($posiciones[8]==True){
		$fecha8=explode("-",$arr[8][0]);
		echo' 
			<div class="alert alert-secondary shadow rounded" role="alert">
				<div class="row align-items-center">
					<div class="col-md-2 text-center align-middle">
						<table width="90" align="center" style="" class="_shadow _rounded" cellpadding="1" cellspacing="0"
							<tbody>
								<tr>
									<td style="background-color:darkgray;border-top-left-radius: .50rem;border-top-right-radius: .50rem;" align="center">
											<span class="small text-white font-weight-bold">
											'.$fecha8[1].'			
											</span>
											<br>
											<span class="text-black font-weight-bold">
											'.$fecha8[0].'			
											</span>
									</td>
								</tr>
								<tr>
									<td style="background-color: white;border-bottom-left-radius: .50rem;border-bottom-right-radius: .50rem;" align="center">
											<span style="font-size:24px;font-weight:bolder">11
												<span>
												</span>
											</span>
									</td>
								</tr>
							</tbody>
						</table>
						<span class="small text-body">
							'.$arr[8][1].'		
						</span>    	
						<br>  
						<span class="text-primary">
							<b>  	
								'.f_provincia($arr[8][2]).'		
							</b>
						</span>    	
					</div>
					'.f_infractor($arr[8][3]).'
						

				</div>
			</div>';
			
	}


}
	
?>



<!-------- FIN    XXXXXXXXXXXX    --------->



<div class="alert alert-warning shadow rounded" role="alert">
			<div class="col-md-12 text-center">
			  <img src="imagenes/Atencion_50.png" height=40px width=40px>
			</div>
			<b>
	        ATENCION: Si desea conocer su situación respecto a actos electorales anteriores deberá comunicarse con la Secretaría Electoral Nacional del distrito donde reside, o en la Cämara Nacional Electoral.	        </b>
</div>
<div class="alert _alert-light text-center" role="alert">
		Ud. ha realizado la consulta N° <b>13395908 </b>. Gracias por utilizar este servicio.	
</div>	

<table align="center" width="100%">
	<tbody>
		<tr>
			<td align="center">
				<input type="button" value="Otra consulta" class="btn btn-primary" onclick="redirigir()">
			</td>
		</tr>
	</tbody>
</table>	
</div>
					
<div class="card-footer cne-pie-bg"> 

<script>
	function redirigir() {
	location.replace("inicio.php")
	}
</script>


		<!-- Pie Aplicacion -->
		<div class="row">
			(c) 2007-2018 - Poder Judicial de la Nación - Cámara Nacional Electoral							</div>
		</div>
					
						
						
		</div>
	</div>
</div>
<!--  fin cuerpo-->
<!-- Pie General-->
	<div class="row">
  		<div class="col-md-12">
      		<span class="text-muted"></span>
  		</div>
	</div>
		</div>
	</div>
</div>

	<!--  fin del contenedor-->
	
	<?php
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	  
		if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	
			$nombre="";
			$nombre = test_input($_POST["efectuar_reclamo"]);
			if($nombre="case_reclamo"){
				$email=$telefono=$adjunto=$texto=$motivo="";
				$email=test_input($_POST["n_email"]);
				$telefono=test_input($_POST["n_telefono"]);
				$adjunto=test_input($_POST["n_adjunto"]);
				$texto=test_input($_POST["n_texto"]);
				$motivo=test_input($_POST["n_motivo"]);

				$contenido ="email:".$email."telefono:".$telefono."adjunto:".$adjunto."texto:".$texto."motivo:".$motivo;	
				try{
					//Envio el email
					mail("valen.bagli@gmail.com","EFECTUAR RECLAMO SOBRE LA SITUACION",$contenido);
					echo "<script>alert('Sus datos fueron enviados correctamente! Pronto nos estaremos comunicando con ustedes');</script>";
					
				} catch (Exception $e) {
					echo 'Se ha producido un error. Intente comunicarse por otro medio con VIA ELECTRONICA';
				}
			}else{
				$email=$telefono=$anio=$mes=$dia=$medio_pago=$boleta="";
				$email=test_input($_POST["n_email"]);
				$telefono=test_input($_POST["n_telefono"]);
				$anio=test_input($_POST["n_anio"]);
				$mes=test_input($_POST["n_mes"]);
				$dia=test_input($_POST["n_dia"]);
				$medio_pago=test_input($_POST["n_medio_pago"]);
				$boleta=test_input($_POST["n_boleta"]);

				$contenido ="email:".$email."telefono:".$telefono."Fecha  dia:".$dia."mes:".$mes."año:".$anio."Medio de pago elegido:".$medio_pago."Boleta:".$boleta;	
				try{
					//Envio el email
					mail("valen.bagli@gmail.com","RECLAMO POR MULTA ABONADA",$contenido);
					echo "<script>alert('Sus datos fueron enviados correctamente! Pronto nos estaremos comunicando con ustedes');</script>";
					
				} catch (Exception $e) {
					echo 'Se ha producido un error. Intente comunicarse por otro medio con VIA ELECTRONICA';
				}
			}
		}
			
	?>	




<!-- The Modal -->
<div class="modal fade" id="Reclamar_multa_abonada">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">RECLAMO POR MULTA ABONADA</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<div class="alert alert-warning text-center shadow" role="alert" style="background-color:#ffcccc;">
			<div class="row align-items-center" style="background-color:#ffcccc;">
					<div class="col-md-12 text-center align-middle" style="background-color:#ffcccc;">
							<img src="imagenes/Cancel_50.png" height=25px width=25px><br>
							<b>
							<b  class="text-danger">
							Si Ud. realizó el pago de la multa establecida, recuerde que pueden trasncurrir hasta 48 hs. para que dicho pago sea acreditado ante la Justicia Electoral, y por ende su situación modificada.
							</b>
							</b>
					</div>
			</div>
			<br>
		</div>

		<form id="reclamo_multa_abonada" class="was-validated" method ="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
			<div class="form-group">
				<label >Nro. de boleta de pago:</label>
				<input type="text" class="form-control" name="n_boleta" placeholder="Ingrese el numero de la boleta de pago"  required>
				<div class="valid-feedback">Valido.</div>
				<div class="invalid-feedback">Complete el campo.</div>
			</div>
			<a href="https://infractores.padron.gob.ar/modelo.php" target="_blank"><img src="imagenes/Lupa_50.png" height=25px width=25px >Ver modelo de boleta!</a> 	
			
			<br><br>
			<div class="form-group">
				<label >Motivo del reclamo:</label>
				<select  name="n_medio_pago" size="1">
					<option value="banco nacion" >Por Banco Nacion</option>
					<option value="otros medios" >Otros medios de pago electronicos</option>
				</select>
			</div>		
			<div class="form-group">
				<label >Fecha de pago:</label>
				<label >Dia</label>
				<select  name="n_dia" size="1">
					<option value="1" >1</option>
					<option value="2" >2</option>
					<option value="3" >3</option>
					<option value="4" >4</option>
					<option value="5" >5</option>
					<option value="6" >6</option>
					<option value="7" >7</option>
					<option value="8" >8</option>
					<option value="9" >9</option>
					<option value="10" >10</option>
					<option value="11" >11</option>
					<option value="12" >12</option>
					<option value="13" >13</option>
					<option value="14" >14</option>
					<option value="15" >15</option>
					<option value="16" >16</option>
					<option value="17" >17</option>
					<option value="18" >18</option>
					<option value="19" >19</option>
					<option value="20" >20</option>
					<option value="21" >21</option>
					<option value="22" >22</option>
					<option value="23" >23</option>
					<option value="24" >24</option>
					<option value="25" >25</option>
					<option value="26" >26</option>
					<option value="27" >27</option>
					<option value="28" >28</option>
					<option value="29" >29</option>
					<option value="30" >30</option>
					<option value="31" >31</option>
				</select>
				<label >Mes</label>
				<select  name="n_mes" size="1">
					<option value="enero" >enero</option>
					<option value="febrero" >febrero</option>
					<option value="marzo" >marzo</option>
					<option value="abril" >abril</option>
					<option value="mayo" >mayo</option>
					<option value="junio" >junio</option>
					<option value="julio" >julio</option>
					<option value="agosto" >agosto</option>
					<option value="septiembre" >septiembre</option>
					<option value="octubre" >octubre</option>
					<option value="noviembre" >noviembre</option>
					<option value="diciembre" >diciembre</option>
				</select>
				<label >Año</label>
				<select  name="n_anio" size="1">
					<option value="2019" >2019</option>
					<option value="2018" >2018</option>
					<option value="2017" >2017</option>
					<option value="2016" >2016</option>
					<option value="2015" >2015</option>
					<option value="2014" >2014</option>
					<option value="2013" >2013</option>
				</select>
			</div>
			<!-- Linea de division--->
			<hr>	
				
			Para comunicarnos con Ud. acerca de la tramitación de su reclamo		
			<div class="form-group">
				<label for="uname">Su teléfono:</label>
				<input type="text" class="form-control" name="n_telefono" placeholder="Incluya la característica de su localidad" name="" required>
				<div class="valid-feedback">Valido.</div>
				<div class="invalid-feedback">Complete el campo.</div>
			</div>
			<br>
			<div class="form-group">
				<label for="uname">Su direccion de email:</label>
				<input type="text" class="form-control" name="n_email" placeholder="Ingrese su email" name="" required>
				<div class="valid-feedback">Valido.</div>
				<div class="invalid-feedback">Complete el campo.</div>
			</div>
			

				<!-- Modal footer -->
			<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="efectuar_reclamo" value="case_reclamo" >Proceder</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>	

		</form>		
        </div>
      </div>
    </div>
  </div>	





<!-- The Modal -->
  <div class="modal fade" id="Reclamar" >
    <div class="modal-dialog" >
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">RECLAMAR SOBRE SU SITUACION</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
		<div class="container">
			<form id="reclamo" class="was-validated" method ="post" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
					<label >Motivo del reclamo:</label>
					<select  name="n_motivo" size="1">
						<option value="">-Por favor seleccione</option>
						<option value="mayor de 70">MAYOR DE 70 AÑOS</option>
						<option value="menor de 18">MENOR DE 18 AÑOS</option>
						<option value="vote y poseo troquel">VOTE Y POSEO TROQUEL</option>
						<option value="otros motivos">OTROS MOTIVOS</option>
						<option value="reclamo pago multa abonada">RECLAMO P/ MULTA ABONADA</option>
					</select><br><br>
				</div>

				<div class="form-group">
					<label >Documentacion Adjunta:</label>
					<input type="file" name="n_adjunto" accept=".pdf,.jpg,.png" multiple  />
				</div>
				<div class="form-group">
					<label >Breve explicación de su reclamo<br>
							(max.200 caracteres)</label>
					<textarea class="form-control" id="" name="n_texto" rows="4" cols="75" maxlength="200" placeholder="Describa brevemente el motivo de su reclamo...." required></textarea>
					<div class="valid-feedback">Valido.</div>
					<div class="invalid-feedback">Complete el campo.</div>
				</div>
				<!-- Linea de division--->
				<hr>
				Para comunicarnos con Ud. acerca de la tramitación de su reclamo.
				<div class="form-group">
					<label for="uname">Su teléfono:</label>
					<input type="text" class="form-control" name="n_telefono" placeholder="Incluya la característica de su localidad" name="" required>
					<div class="valid-feedback">Valido.</div>
					<div class="invalid-feedback">Complete el campo.</div>
				</div>
			    <br>
				<div class="form-group">
					<label for="uname">Su direccion de email:</label>
					<input type="text" class="form-control" id="" name="n_email" placeholder="Ingrese su email" name="" required>
					<div class="valid-feedback">Valido.</div>
					<div class="invalid-feedback">Complete el campo.</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="efectuar_reclamo" value="case_reclamo" >Efectuar reclamo</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
				
			</form>
		</div>
        </div>
         
      </div>
    </div>
  </div>	


<!-- The Modal -->
<div class="modal fade" id="Boleta_de_pago_multa">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">BOLETA DE PAGO MULTA</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          PROXIMAMENTE 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>	
	

</body><div id="vimeo-record-extension"></div></html>