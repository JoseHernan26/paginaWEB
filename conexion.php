<?php

function conectar(){
   $srvr = "localhost";
   $user = "root";
   $pswd = "";
   $bd = "infractores";
   $port = 3306;
   $conexion = new mysqli($srvr, $user, $pswd, $bd,$port) or die("Error de conexion:".mysql_connect_error()); 
   return $conexion;
}
function buscar($dni, $sexo, $prov){
   $con = conectar();
   $resul = mysqli_query($con,"SELECT * FROM Personas WHERE P_Dni=$dni AND P_Sexo='$sexo' AND P_IdDistrito=$prov");
   if(mysqli_num_rows($resul)){

	  $row = $resul->fetch_array(MYSQLI_NUM);
	  $arr = array($row[0],$row[1],$row[2]);
	  return $arr;
   }else{
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
	  
      echo '<div class="alert alert-danger text-center shadow" role="alert"><div class="col-md-12 text-center"><i class="fas fa-times-circle fa-3x" style="color:red;"></i></div><h3>La matrícula ['.$dni.' '.$sexo.' ] no se ha localizado<br>en el padrón del distrito [ '.$distrito.' ]</h3><br>Si considera que esta situación es debido a un error u omisión en el <br>Registro Nacional de Electores, consulta a la Secretaria Electoral del distrito ó a la Cámara Nacional Electoral<br>Muchas gracias</div>';
      mysqli_close($con);
	  
   }
}

function listar($dni,$sexo,$prov){
    $con = conectar();
    $resul = mysqli_query($con,"SELECT * FROM Mesa_Persona MP, Mesa_Votacion MV WHERE Mp_P_Dni=$dni AND Mp_P_Sexo='$sexo' AND Mp_D_id=$prov AND MV.Mv_id = MP.Mp_Mv_id ORDER BY Mv_fecha DESC");
    $arr =array();
    while($consulta=mysqli_fetch_array($resul)){
      array_push($arr, array($consulta['Mv_fecha'],$consulta['Mv_tipo'],$consulta['Mp_deuda'])); 
    }
    return $arr;
}

?>
